<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesRefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_ref', function (Blueprint $table) {
            $table->integer('matches_id')->unsigned()->index();
            $table->foreign('matches_id')->references('id')->on('matches')->onDelete('cascade');
            $table->integer('refs_id')->unsigned()->index();
            $table->foreign('refs_id')->references('id')->on('refs')->onDelete('cascade');
            $table->boolean('assigned')->default(0);
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
        Schema::dropIfExists('matches_refs');
    }
}
