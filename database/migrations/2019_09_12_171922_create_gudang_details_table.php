<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGudangDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gudang_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_gudang')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->date('tanggal');
            $table->integer('masuk_utuh')->default(0);
            $table->integer('masuk_pecah')->default(0);
            $table->integer('masuk_batu')->default(0);
            $table->integer('keluar_utuh')->default(0);
            $table->integer('keluar_pecah')->default(0);
            $table->integer('keluar_batu')->default(0);
            $table->integer('rbg_utuh_pecah')->default(0);
            $table->integer('rbg_utuh_batu')->default(0);
            $table->integer('rbg_susut_pecah')->default(0);
            $table->integer('rbg_susut_batu')->default(0);

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
        Schema::dropIfExists('gudang_detail');
    }
}
