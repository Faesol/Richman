<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kelas_pengajar;
use App\Transaksi;
use App\Topik_pengajar;
use App\User;
use Auth;

class HomeControllerAdmin extends Controller
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
        return view('Admin/home');
    }
    public function transaksi()
    {
        $data = Transaksi::get();
        return view('Admin/transaksi',['data' => $data]);
    }
    public function Tapprove($id)
    {
        $aprove = Transaksi::where('status', 0)
            ->update(['status' => "1"]);
        return back();
    }
    public function Treject($id)
    {
        $reject = Transaksi::where('status', 1)
            ->update(['status' => "0"]);
        return back();
    }
}
