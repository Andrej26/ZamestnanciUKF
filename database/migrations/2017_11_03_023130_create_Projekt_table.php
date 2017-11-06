<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjektTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Projekt', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idProjekt');
            $table->string('nazov');
            $table->integer('zaciatok')->nullable();
            $table->integer('koniec')->nullable();
            $table->string('regCislo')->nullable();

            //Foreign key
            $table->integer('Zamestnanec_idzamestnanec')->unsigned();
            $table->foreign('Zamestnanec_idzamestnanec')->references('idzamestnanec')->on('zamestnanec');

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
        Schema::dropIfExists('Projekt');
    }
}
