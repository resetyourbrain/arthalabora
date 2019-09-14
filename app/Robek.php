<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Robek extends Model
{
    use SoftDeletes;
    use \App\BDSM\ModelHelper;

    protected $table = 'robek';

    protected $hidden = ['deleted_at', 'created_at','updated_at'];

    protected $fillable = ['robek','beku','jenis','id_pemilik','id_barang','id_kapal','id_user','tanggal'];
}
