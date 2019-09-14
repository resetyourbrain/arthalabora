<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTallySheetLansirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tallysheet_lansir', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tallysheet')->unsigned();
            $table->integer('lansir');
            $table->integer('robek');
            $table->integer('beku');
            $table->integer('id_robek')->unsigned()->nullable();

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
        Schema::dropIfExists('tallysheet_lansir');
    }
}
