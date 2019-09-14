<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kapal extends Model
{
    use SoftDeletes;
    use \App\BDSM\ModelHelper;

    protected $table = 'kapal';

    protected $hidden = ['deleted_at', 'created_at','updated_at'];

    protected $fillable = ['nama','nahkoda','pemilik','id_agen'];
}
