<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTallySheetDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tallysheet_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tallysheet')->unsigned();
            $table->string('no_spb');
            $table->string('no_spm');
            $table->string('no_do');
            $table->string('no_polisi');
            $table->string('badan');
            $table->integer('id_tujuan')->unsigned();
            $table->integer('id_toko')->unsigned();
            $table->integer('id_spb')->unsigned()->nullable();
            $table->integer('jumlah');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tallysheet_detail');
    }
}
