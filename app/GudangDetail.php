<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GudangDetail extends Model
{
    use SoftDeletes;
    use \App\BDSM\ModelHelper;

    protected $table = 'gudang_detail';

    protected $hidden = ['deleted_at', 'created_at','updated_at'];

    protected $fillable = ['id_gudang','id_user','tanggal','masuk_utuh','masuk_pecah','masuk_batu','keluar_utuh','keluar_pecah','keluar_batu','rgb_utuh_pecah','rgb_utuh_batu','rgb_susut_pecah','rgb_susut_batu'];
}
