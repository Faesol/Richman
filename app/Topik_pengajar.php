<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Topik_Pengajar extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'judul_topik', 'file_video', 'deskripsi','file_lampiran'
    ];

    public $table = "topik_pengajar";

    public $timestamps = false;



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
