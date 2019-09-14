<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRobeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('robek', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('robek');
            $table->integer('beku');
            $table->enum('jenis',['kapal','lansir']);
            $table->integer('id_pemilik')->unsigned()->nullable();
            $table->integer('id_barang')->unsigned()->nullable();
            $table->integer('id_kapal')->unsigned()->nullable();
            $table->integer('id_user')->unsigned()->nullable();
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
        Schema::dropIfExists('robek');
    }
}
