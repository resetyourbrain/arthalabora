<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pemilik extends Model
{
    use SoftDeletes;
    use \App\BDSM\ModelHelper;

    protected $table = 'pemilik';

    protected $hidden = ['deleted_at', 'created_at','updated_at'];

    protected $fillable = ['nama','lokasi'];
}
