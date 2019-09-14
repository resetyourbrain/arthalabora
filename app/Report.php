<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use SoftDeletes;
    use \App\BDSM\ModelHelper;

    protected $table = 'report';

    protected $hidden = ['created_at','updated_at'];

    protected $fillable = ['ref','type','object'];
}
