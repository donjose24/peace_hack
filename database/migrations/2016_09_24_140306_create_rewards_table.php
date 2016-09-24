<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rewards', function ($table) {
            $table->increments('id');
            $table->string('title');
            $table->string('short_description');
            $table->longText('description');
            $table->integer('cost');
            $table->longText('instructions');
            $table->string('picture');
            $table->string('sponsor');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
