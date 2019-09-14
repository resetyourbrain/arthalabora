<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TallySheetDetail extends Model
{
    use SoftDeletes;
    use \App\BDSM\ModelHelper;

    protected $table = 'tallysheet_detail';

    protected $hidden = ['deleted_at'];

    protected $fillable = ['id_tallysheet','no_spb','no_spm','no_do','no_polisi','badan','id_tujuan','id_toko','id_spb','jumlah'];
}
