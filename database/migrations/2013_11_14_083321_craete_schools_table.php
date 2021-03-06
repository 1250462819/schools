<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CraeteSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('slug');
            $table->timestamps();
        });

        // Schema::create('school_student', function (Blueprint $table) {
        //     $table->integer('school_id');
        //     $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
        //     $table->integer('student_id');
        //     $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');

        // });
        // Schema::create('school_teacher', function (Blueprint $table) {
        //     $table->integer('school_id');
        //     $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
        //     $table->integer('teacher_id');
        //     $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');

        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
        // Schema::dropIfExists('school_student');
        // Schema::dropIfExists('school_teacher');
    }
}
