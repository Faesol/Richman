<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Kelas_pengajar;
class Transaksi extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_kelas', 'id_user','method_transaksi',
    ];

    public $table = "transaksi";

    public $timestamps = true;

    public function user()
    {
        return $this->hasOne('App\User','id','id_user');
    }

    public function kelas()
    {
        return $this->hasOne('App\Kelas_pengajar','id','id_kelas');
    }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
