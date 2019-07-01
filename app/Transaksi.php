<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Transaksi extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_kelas', 'method_transaksi', 'id_user'
    ];

    public $table = "transaksi";

    public $timestamps = false;


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
