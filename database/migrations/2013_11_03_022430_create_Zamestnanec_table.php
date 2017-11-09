<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZamestnanecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Zamestnanec', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->integer('idzamestnanec')->unsigned();
            $table->primary('idzamestnanec');

            $table->string('meno');
            $table->string('heslo');
            $table->string('profil');
            $table->string('email')->nullable();
            $table->integer('stav');
            $table->rememberToken();

            //Foreign key
            $table->integer('Katedra_idKatedra')->unsigned();
            $table->foreign('Katedra_idKatedra')->references('idKatedra')->on('Katedra');

            //Foreign key
            $table->integer('rolaPouzivatela_idrolaPouzivatela')->unsigned();
            $table->foreign('rolaPouzivatela_idrolaPouzivatela')->references('idrolaPouzivatela')->on('rolaPouzivatela');

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
        Schema::dropIfExists('Zamestnanec');
    }
}
