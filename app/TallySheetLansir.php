<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TallySheetLansir extends Model
{
    use SoftDeletes;
    use \App\BDSM\ModelHelper;

    protected $table = 'tallysheet_lansir';

    protected $hidden = ['deleted_at'];

    protected $fillable = ['id_tallysheet','lansir','robek','beku','id_robek'];
}
