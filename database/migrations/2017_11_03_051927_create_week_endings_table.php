<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeekEndingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('week_endings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('activities_id')->unsigned()->index();
            $table->string('weekending');
            $table->string('dateloaded');
            $table->timestamps();

            $table->foreign('activities_id')
                ->references('id')
                ->on('activities')
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
        Schema::dropIfExists('week_endings');
    }
}
