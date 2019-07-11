<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kelas_pengajar;
use App\Transaksi;
use App\Topik_pengajar;
use App\User;
use Auth;

class HomeControllerPelajar extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Kelas_pengajar::get();
        return view('/pelajar/home',['data' => $data]);
    }
    public function KtkelasP()
    {
        $data = Kelas_pengajar::get('kategori_kelas');
        //dd($data);
        return view('/pelajar/kategorikelas',['data' => $data]);
    }
    public function DtKelas($id)
    {
        $data = Kelas_pengajar::where('id',$id)->first();
        $hasil_diskon = DB::table('hasil_diskon')->where('id',  $id)->get();
        $id_kelas = Kelas_pengajar::where('id',$id)->first()->id;
        $topik   = Topik_pengajar::where('id_kelas' ,'=', $id_kelas)->get();
        //dd($topik);
        $idUser = Auth::user()->id;
        $cektransaksi = Transaksi::where([
             ['id_user', '=', $idUser],
             ['id_kelas', '=', $id_kelas]])->get();
        //dd($cektransaksi);
        return view('/pelajar/detailkelas',['data' => $data, 
                                            'hasil_diskon' => $hasil_diskon,
                                            'cektransaksi' => $cektransaksi,
                                            'topik'        => $topik
                                        ]);
    }
    public function df_kelas($id)
    {
        $data = Kelas_Pengajar::where('id', $id)->first();
        $diskon = $hasil_diskon = DB::table('hasil_diskon')->where('id',  $id)->get();
        //dd($diskon);
        return view('pelajar/checkout', ['data' => $data,
                                        'diskon' => $diskon]);
    }

    public function bl_kelas(Request $reques, $id){
        $idUser = Auth::user()->id;
        $data   = new Transaksi;
        $data->id_kelas             = $reques->get('id_kelas');
        $data->methode_transaksi    = $reques->get('methode_transaksi');
        $data->id_user              = $idUser;
        //dd($data);
        $data->save();
        return view('pelajar/tanda_beli');
    }

    public function Ksaya()
    {
        $idUser = Auth::user()->id;
        $data   = Transaksi::where('id_user', $idUser)
                    ->with('kelas')->get();
        //dd($data);
        return view('pelajar/kelas_saya',['data' => $data]);
        //dd($data);
    }

    public function byr_kelas($id)
    {
        return view('pelajar/bayar_kelas');
    }

    public function bk_kelas($id)
    {
        // $idUser = Auth::user()->id;
        $data   = Kelas_pengajar::where('id', $id)->get();
        $id_kelas = Kelas_pengajar::where('id',$id)->first()->id;
        $topik   = Topik_pengajar::where('id_kelas' ,'=', $id_kelas)->get();
        return view('pelajar/buka_kelas',['data' => $data,
                                        'topik' => $topik,
                                        'id_kelas' => $id_kelas]);
    }

    public function bt_topik($idk, $idt)
    {
        $data   = Topik_pengajar::where([['id_kelas','=',$idk],
                                        ['id', '=', $idt]])->get();
        return view('pelajar/buka_topik',['data' => $data]);
    }
}
