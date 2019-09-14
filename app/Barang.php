<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barang extends Model
{
    use SoftDeletes;
    use \App\BDSM\ModelHelper;

    protected $table = 'barang';

    protected $hidden = ['deleted_at', 'created_at','updated_at'];

    protected $fillable = ['nama','jenis','satuan','berat','satuan_berat'];
}
