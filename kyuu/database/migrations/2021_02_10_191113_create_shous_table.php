<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShousTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shous', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('bunrui')->nullable();
            $table->integer('kakaku')->nullable();
            $table->integer('genka')->nullable();
            
            $table->string('name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shous');
    }
}
