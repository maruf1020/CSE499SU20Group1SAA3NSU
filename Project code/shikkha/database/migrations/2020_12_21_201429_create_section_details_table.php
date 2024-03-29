<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_details', function (Blueprint $table) {
            $table->id();
            $table->integer('institution_id');
            $table->integer('faculty_id')->nullable();
            $table->integer('student_id')->nullable();
            $table->integer('section_id');
            $table->integer('course_id');
            $table->integer('session_id');
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
        Schema::dropIfExists('section_details');
    }
}
