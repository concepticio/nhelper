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
        Schema::create('help_posts', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->longText('description');
            $table->boolean('etat');
            $table->unsignedBigInteger('help_module_id');
            $table->foreign('help_module_id')->references('id')->on('help_modules')->onDelete('cascade');
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
