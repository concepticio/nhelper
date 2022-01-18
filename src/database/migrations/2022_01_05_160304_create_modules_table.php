<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('help_modules', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('breve_description')->nullable();
            $table->string('flatte_icon');
            $table->unsignedBigInteger('parent')->nullable();
            $table->foreign('parent')->references('id')->on('help_modules')->onDelete('cascade');
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
        Schema::dropIfExists('modules');
    }
}
