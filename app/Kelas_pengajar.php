<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Kelas_pengajar extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama_kelas', 'harga_kelas', 'diskon_harga','kategori_kelas','file_foto','file_video','diskripsi','id_user',
    ];

    public $table = "Kelas_pengajar";

    public $timestamps = false;


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
