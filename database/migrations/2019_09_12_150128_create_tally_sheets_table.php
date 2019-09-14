<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTallySheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tallysheet', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kapal')->unsigned();
            $table->integer('id_pemilik')->unsigned();
            $table->integer('id_barang')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->date('tanggal');
            $table->string('asal');
            $table->string('tujuan');
            $table->integer('party');
            $table->enum('jenis',['losing','lansir','exgd']);

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
        Schema::dropIfExists('tallysheet');
    }
}
