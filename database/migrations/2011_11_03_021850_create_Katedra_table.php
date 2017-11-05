<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKatedraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Katedra', function (Blueprint $table) {
            $table->increments('idKatedra');
            $table->string('nazov');
            $table->string('skratkaKatedry');

            //Foreign key
            $table->integer('Fakulta_idFakulta')->unsigned();
            $table->foreign('Fakulta_idFakulta')->references('idFakulta')->on('Fakulta');

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
        Schema::dropIfExists('Katedra');
    }
}
