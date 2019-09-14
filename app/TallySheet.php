<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TallySheet extends Model
{
    use SoftDeletes;
    use \App\BDSM\ModelHelper;

    protected $table = 'tallysheet';

    protected $hidden = ['deleted_at', 'created_at','updated_at'];

    protected $fillable = ['id_kapal','id_pemilik','id_barang','id_user','tanggal','asal','tujuan','party','jenis'];

    use \App\BDSM\ModelDetailHelper;
    protected $detailModelClass = "App\\TallySheetDetail";
    protected $detailForeignKey = "id_tallysheet";
}
