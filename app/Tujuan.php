<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tujuan extends Model
{
    use SoftDeletes;
    use \App\BDSM\ModelHelper;

    protected $table = 'tujuan';

    protected $hidden = ['deleted_at', 'created_at','updated_at'];

    protected $fillable = ['lokasi','gudang'];
}
