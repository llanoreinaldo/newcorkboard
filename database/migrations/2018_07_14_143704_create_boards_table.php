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
        $table->string('hash');
        $table->string('name', 100)->unique();
        $table->string('user_id');
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