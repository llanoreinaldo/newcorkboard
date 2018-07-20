<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url')->unique();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image_url')->nullable();

            $table->foreign('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->foreign('board_id')->unsigned();
            $table->foreign('board_id')->references('id')->on('boards');

            $table->foreign('tag_id')->unsigned();
            $table->foreign('tag_id')->references('id')->on('tags');

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
        Schema::dropIfExists('links');
    }
}
