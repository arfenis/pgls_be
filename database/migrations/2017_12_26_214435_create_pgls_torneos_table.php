<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePglsTorneosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pgls_torneos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tournament_name');
            $table->mediumText('tournament_description');
            $table->string('tournament_type');
            $table->integer('tournament_teams');
            $table->date('tournament_date');
            $table->string('tournament_code');
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
        Schema::dropIfExists('pgls_torneos');
    }
}
