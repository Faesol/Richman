<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kelas_pengajar;

use Auth;

use App\Transaksi;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Kelas_pengajar::get();
        //dd($data);
        return view('/home',['data' => $data]);
    }
    public function DtlKelas($slug)
    {
        $data = Kelas_pengajar::where('IDurl_slug',$slug)->first();
        $hasil_diskon = DB::table('hasil_diskon')->where('IDurl_slug',  $slug)->get();
        $id_kelas = Kelas_pengajar::where('IDurl_slug',$slug)->first()->id;
        $cektransaksi = null;
        if (Auth::guest()){
            $cektransaksi = "[]";
        }
        else {
            $idUser = Auth::user()->id;
            $cektransaksi = Transaksi::where([
                 ['id_user', '=', $idUser],
                 ['id_kelas', '=', $id_kelas]])->get();
        }
        
        return view('/detailkelas',['data' => $data, 
                                            'hasil_diskon' => $hasil_diskon,
                                            'cektransaksi' => $cektransaksi
                                        ]);    
    }
    public function KatKelasP()
    {
        $data = DB::table('kelas_pengajar')->where('kategori_kelas','pemrograman')->get();
        //dd($data);
        return view('kelas', ['data' => $data]);
    }
    public function KatKelasM()
    {
        $data = DB::table('kelas_pengajar')->where('kategori_kelas','multimedia')->get();
        //dd($data);
        return view('kelas', ['data' => $data]);
    }
    public function Ksaya()
    {
        $idUser = Auth::user()->id;
        $data   = DB::table('transaksi')
                ->join('Kelas_pengajar', 'transaksi.id_kelas', '=', 'Kelas_pengajar.id')
                ->where('transaksi.id_user', '=', $idUser)->get();
        return view('kelas_saya',['data' => $data]);
        //dd($data);
    }
}
