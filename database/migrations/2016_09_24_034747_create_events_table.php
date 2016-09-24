<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function ($table) {
            $table->increments('id');
            $table->string('title');
            $table->string('short_description');
            $table->string('picture');
            $table->string('description');
            $table->string('organizing_body');
            $table->string('organizing_body_email');
            $table->string('organizing_body_contact');
            $table->dateTime('start_date');
            $table->dateTime('end_date');

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
        Schema::dropIfExists('events');
    }
}
