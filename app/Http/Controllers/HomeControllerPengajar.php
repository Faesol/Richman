<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\User;
use Session;
use App\Kelas_pengajar;
use App\Topik_pengajar;
use Auth;
Use Redirect;

class HomeControllerPengajar extends Controller
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
        return view('tutor/home');
    }

    public function get_kelola_kelas()
    {
        $idUser= Auth::user()->id;
        $data = DB::table('Kelas_pengajar')->where('id_user', $idUser)->get();
        //dd($data);
        return view('tutor/form_kelola_kelas',['data' => $data]);
    }

    public function get_buat_kelas()
    {
        return view('tutor/form_buat_kelas');
    }

    public function post_buat_kelas(Request $request)
    {
        $idUser= Auth::user()->id;
        if($request->hasfile('file_foto') && $request->hasfile('file_video')){
            $foto = $request->file('file_foto');
            $video = $request->file('file_video');
            $filefoto=time().$foto->getClientOriginalName();
            $filevideo=time().$video->getClientOriginalName();
            $foto->move(public_path().'/images/', $filefoto);
            $video->move(public_path().'/videos/', $filevideo);
         }
        $data                   = new Kelas_pengajar;
        $data->nama_kelas       = $request->get('nama_kelas');
        $data->IDurl_slug        = Str::slug($request->get('nama_kelas'));
        $data->harga_kelas      = $request->get('harga_kelas');
        $data->diskon_harga     = $request->get('diskon_harga');
        $data->kategori_kelas   = $request->get('kategori_kelas');
        $data->file_foto        = $filefoto;
        $data->file_video       = $filevideo;
        $data->diskripsi        = $request->get('diskripsi');
        $data->id_user          = $idUser;
        //dd($data);
        $data->save();
        return redirect()->action('HomeControllerPengajar@get_kelola_kelas');
        //return redirect()->route('pengajar/kelola-kelas');
        //dd($data);
    }

    public function get_lihat_materi($id)
    {
        $idUser= Auth::user()->id;
        $data1 = DB::table('users')->where('id', $idUser)->get();
        $data2 = DB::table('Kelas_pengajar')->find($id);
        //dd($data2);
        return view('tutor/form_lihat_kelas',['data1' => $data1,
                                            'data2' => $data2]);
    }

    public function get_edit_materi($id)
    {
        $idUser                 = Auth::user()->id;
        $data1                  = DB::table('Kelas_pengajar')->find($id);
        $data2                  = DB::table('topik_pengajar')->where('id_kelas',$id)->get();
        return view('tutor/form_edit_kelas',['data1' => $data1, 'data2' => $data2]);
    }

    public function get_update_materi(Request $request, $id)
    {
        
        $input = $request->all();
        //dd($input);
        if($request->hasfile('file_foto') && $request->hasfile('file_video')){
            $foto = $request->file('file_foto');
            $video = $request->file('file_video');
            $filefoto=time().$foto->getClientOriginalName();
            $filevideo=time().$video->getClientOriginalName();
            $foto->move(public_path().'/images/', $filefoto);
            $video->move(public_path().'/videos/', $filevideo);
         }
        $data                   = Kelas_pengajar::find($id);
        $data->nama_kelas       = $request->get('nama_kelas');
        $data->harga_kelas      = $request->get('harga_kelas');
        $data->diskon_harga     = $request->get('diskon_harga');
        $data->kategori_kelas   = $request->get('kategori_kelas');
        $data->file_foto        = $filefoto;
        $data->file_video       = $filevideo;
        $data->diskripsi        = $request->get('diskripsi');
        //dd($data);
        $data->save();
        return redirect()->action('HomeControllerPengajar@get_detail_kelas', ['id' => $id]);
        //dd($data);
    }

    public function get_penjualan_kelas($id)
    {
        $idUser= Auth::user()->id;
        $data = DB::table('Kelas_pengajar')->find($id);
        return view('tutor/form_penjualan_kelas',['data' => $data]);
    }

    public function get_detail_kelas($id)
    {
        $idUser                 = Auth::user()->id;
        $data                   = DB::table('Kelas_pengajar')->find($id);
        $data2                   = DB::table('topik_pengajar')->where('id_kelas',$id)->get();
        //dd($data2);
        return view('tutor/form_kelas',['data' => $data, 'data2' => $data2]);
    }

    public function get_buat_topik($id)
    {
        $idUser                 = Auth::user()->id;
        $data1                   = DB::table('topik_pengajar')->where('id_user',$idUser);
        $data2                   = DB::table('Kelas_pengajar')->find($id);
        //dd($data2);
        return view('tutor/form_buat_topik', ['data2' => $data2]);
    }

    public function post_buat_topik(Request $request, $id)
    {
        $idUser= Auth::user()->id;
        $input = $request->all();
        //dd($input);
        $this->validate($request, [
            'judul_topik' => 'required',
            'file_video' => 'required',
            'deskripsi' => 'required',
            'file_lampiran' => 'required',
        ]);
        if($request->hasfile('file_lampiran') && $request->hasfile('file_video')){
            $lampiran = $request->file('file_lampiran');
            $video = $request->file('file_video');
            $filelampiran=time().$lampiran->getClientOriginalName();
            $filevideo=time().$video->getClientOriginalName();
            $lampiran->move(public_path().'/file_lampiran_topik/', $filelampiran);
            $video->move(public_path().'/file_video_topik/', $filevideo);
         }
        $input                  = new Topik_pengajar;
        $input->judul_topik     = $request->get('judul_topik');
        $input->file_lampiran   = $filelampiran;
        $input->file_video      = $filevideo;
        $input->deskripsi       = $request->get('deskripsi');
        $input->id_user         = $idUser;
        $input->id_kelas        = $request->get('id');
        //dd($input);
        $input->save();
        return redirect()->action('HomeControllerPengajar@get_detail_kelas', ['id' => $id]);
    }

    
}
