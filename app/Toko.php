<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Toko extends Model
{
    use SoftDeletes;
    use \App\BDSM\ModelHelper;

    protected $table = 'toko';

    protected $hidden = ['deleted_at', 'created_at','updated_at'];

    protected $fillable = ['nama','id_pemilik','id_tujuan','gudang'];
}
