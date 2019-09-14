<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKapalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kapal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('nahkoda')->nullable();
            $table->string('pemilik')->nullable();
            $table->integer('id_agen')->unsigned()->nullable();

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
        Schema::dropIfExists('kapal');
    }
}
