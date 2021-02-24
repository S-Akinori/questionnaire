<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('date');
            $table->string('venue');
            $table->string('place');
            $table->string('email');
            $table->text('profile_movie');
            $table->text('opening_movie');
            $table->text('ending_movie');
            $table->text('way_to_get_info');
            $table->string('about_homepage');
            $table->string('about_sending');
            $table->string('about_staff');
            $table->string('about_all');
            $table->text('thoughts_service');
            $table->text('thoughts_movie');
            $table->text('opinion')->nullable();
            $table->text('photo_1');
            $table->text('photo_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
