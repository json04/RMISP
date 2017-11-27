<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHarvesterActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harvester_activities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('harvesters_id')->unsigned()->index();
            $table->integer('activities_id')->unsigned()->index();
            $table->string('weekending');
            $table->timestamps();

            $table->foreign('activities_id')
                ->references('id')
                ->on('activities')
                ->onDelete('cascade');

            $table->foreign('harvesters_id')
                ->references('id')
                ->on('harvesters')
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
        Schema::dropIfExists('harvester_activities');
    }
}
