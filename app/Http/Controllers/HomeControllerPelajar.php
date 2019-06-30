<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Kelas_pengajar;

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
        return view('/home',['data' => $data]);
    }
    public function KtkelasP()
    {
        $data = Kelas_pengajar::get('kategori_kelas');
        dd($data);
        return view('pelajar/kategorikelas',['data' => $data]);
    }
    public function DtKelas($slug)
    {
        $data = Kelas_pengajar::where('IDurl_slug',$slug)->first();
        $hasil_diskon = DB::table('hasil_diskon')->where('IDurl_slug',  $slug)->get();
        //dd($hasil_diskon);
        return view('pelajar/detailkelas',['data' => $data, 
                                            'hasil_diskon' => $hasil_diskon]);
    }
    public function df_kelas()
    {
        return view('pelajar/checkout');
    }
}
