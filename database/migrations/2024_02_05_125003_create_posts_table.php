<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            // $table->integer('user_id');
            // $table->integer('category_id');

        //     $table->unsignedBigInteger('user_id');
        // $table->foreign('user_id')->references('id')->on('users');

        // $table->unsignedBigInteger('Category_id');
        // $table->foreign('Category_id')->references('id')->on('Categories');

            $table->foreignId('user_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->string('title');
            $table->string('slug');
            $table->string('image');
            $table->string('description');
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
        Schema::dropIfExists('posts');
    }
}
