<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGudangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gudang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kapal')->unsigned();
            $table->integer('id_pemilik')->unsigned();
            $table->integer('id_barang')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->date('tanggal');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gudang');
    }
}
