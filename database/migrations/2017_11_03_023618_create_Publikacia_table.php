<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublikaciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Publikacia', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idPublikacia');
            $table->integer('rok')->nullable();
            $table->string('nazov');
            $table->string('isbn')->nullable();
            $table->string('podtitulok');
            $table->text('autori');
            $table->string('typ');
            $table->string('vydavatel')->nullable();
            $table->string('kod');
            $table->integer('pocetStran')->nullable();

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
        Schema::dropIfExists('Publikacia');
    }
}
