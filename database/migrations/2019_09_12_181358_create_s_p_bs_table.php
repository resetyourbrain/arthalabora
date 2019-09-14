<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSPBsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spb', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_spb');
            $table->string('no_polisi');
            $table->string('sopir');
            $table->integer('jumlah');
            $table->integer('id_pemilik')->unsigned()->nullable();
            $table->integer('id_barang')->unsigned()->nullable();
            $table->integer('id_kapal')->unsigned()->nullable();
            $table->integer('id_user')->unsigned()->nullable();
            $table->date('tanggal');
            $table->enum('jenis',['losing','lansir','exgd']);
            $table->text('catatan');

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
        Schema::dropIfExists('spb');
    }
}
