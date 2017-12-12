<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZamestnanecTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zamestnanec_tag', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('zamestnanec_id')->unsigned();
            $table->foreign('zamestnanec_id')->references('idzamestnanec')->on('zamestnanec');

            $table->integer('tag_id')->unsigned();
            $table->foreign('tag_id')->references('id')->on('tags');

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
        Schema::dropIfExists('zamestnanec_tag');
    }
}
