<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('file_name');
            $table->string('original_file_name');
            $table->string('extension');
            $table->integer('institution_id');
            $table->integer('faculty_id');
            $table->integer('section_id');
            $table->integer('course_id');
            $table->integer('session_id');
            $table->integer('is_public');
            $table->string('random')->nullable();
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
        Schema::dropIfExists('resources');
    }
}
