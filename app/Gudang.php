<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gudang extends Model
{
    use SoftDeletes;
    use \App\BDSM\ModelHelper;

    protected $table = 'gudang';

    protected $hidden = ['deleted_at', 'created_at','updated_at'];

    protected $fillable = ['id_kapal','id_pemilik','id_barang','id_user','tanggal'];

    use \App\BDSM\ModelDetailHelper;
    protected $detailModelClass = "App\\GudangDetail";
    protected $detailForeignKey = "id_gudang";
}
