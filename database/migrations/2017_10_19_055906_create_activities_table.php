<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reference');
            $table->string('dateloaded');
            $table->integer('sdt');
            $table->string('unitid');
            $table->string('weekending');
            $table->integer('groupnumber');
            $table->double('haulton', 15, 8);
            $table->string('driver');
            $table->string('block');
            $table->integer('numberofharvester');
            $table->double('rateton', 15, 8);
            $table->string('datemilled');
            $table->double('grosstons', 15, 8);
            $table->double('trashpercentage', 15, 8);
            $table->string('mill')->nullable(); // to verify 
            $table->double('trashtotal', 15, 8);
            $table->double('nettons', 15, 8);
            $table->double('sugar', 15, 8);
            $table->double('molases', 15, 8);
            $table->double('dueharvesters', 15, 8);
            $table->double('dueperharvesters', 15, 8);
            $table->double('duedriver', 15, 8);
            $table->double('dueunit', 15, 8);
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
        Schema::dropIfExists('activities');
    }
}
