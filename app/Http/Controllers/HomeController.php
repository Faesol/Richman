<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kelas_pengajar;

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
        //dd($hasil_diskon);
        return view('detailkelas',['data' => $data, 
                                            'hasil_diskon' => $hasil_diskon]);
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
}
