<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->time('time');
            $table->integer('club_id');
            $table->integer('teamnumber');
            $table->integer('typeteam_id');
            $table->string('awayteam');
            $table->integer('matchtype_id');
            $table->integer('categorytype_id');
            $table->integer('class_id');
            $table->integer('responded_referees');
            $table->integer('assigned_referee_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
