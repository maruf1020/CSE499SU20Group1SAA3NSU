<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
          $table->id();
          $table->string('name');
          $table->string('address')->nullable();
          $table->string('start')->unique();
          $table->string('end')->unique();
          $table->string('status')->default('0');
          $table->integer('stop')->default('0');
          $table->integer('institution_id');
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
        Schema::dropIfExists('sessions');
    }
}
