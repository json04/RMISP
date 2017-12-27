<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityHarvesterWeekEndingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity__harvester__week_endings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('activities_id')->unsigned()->index();
            $table->integer('harvesters_id')->unsigned()->index();
            $table->integer('week_endings_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('activities_id')
                ->references('id')
                ->on('activities')
                ->onDelete('cascade');

            $table->foreign('harvesters_id')
                ->references('id')
                ->on('harvesters')
                ->onDelete('cascade');

            $table->foreign('week_endings_id')
                ->references('id')
                ->on('week_endings')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity__harvester__week_endings');
    }
}
