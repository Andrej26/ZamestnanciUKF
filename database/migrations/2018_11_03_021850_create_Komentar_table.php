<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKomentarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Komentar', function (Blueprint $table) {
            $table->increments('idKomentar');
            $table->text('komentar');

            //Foreign key
            $table->integer('autor')->unsigned();
            $table->foreign('autor')->references('idzamestnanec')->on('zamestnanec');

            //Foreign key
            $table->integer('okomentovanyId')->unsigned();
            $table->foreign('okomentovanyId')->references('idzamestnanec')->on('zamestnanec');

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
        Schema::dropIfExists('Komentar');
    }
}
