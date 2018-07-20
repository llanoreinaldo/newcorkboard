<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->unique();
            
            $table->foreign('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->foreign('link_id')->unsigned();
            $table->foreign('link_id')->references('id')->on('links');

            $table->foreign('message_id')->unsigned();
            $table->foreign('message_id')->references('id')->on('messages');

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
        Schema::dropIfExists('boards');
    }
}
