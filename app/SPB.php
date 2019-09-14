<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SPB extends Model
{
    use SoftDeletes;
    use \App\BDSM\ModelHelper;

    protected $table = 'spb';

    protected $hidden = ['deleted_at', 'created_at','updated_at'];

    protected $fillable = ['no_spb','no_polisi','sopir','jumlah','id_pemilik','id_barang','id_kapal','id_user','tanggal','jenis','catatan'];
}
