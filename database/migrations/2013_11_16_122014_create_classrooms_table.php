<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('section');
            $table->string('field');
            $table->integer('school_id')->unsigned();
            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
            //$table->integer('lesson_id')->unsigned();
            //$table->foreign('lesson_id')->references('id')->on('lessons')->onDelete('cascade');
            $table->timestamps();
        });

        // Schema::create('classroom_student', function (Blueprint $table) {
        //     $table->integer('classroom_id');
        //     $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('cascade');
        //     $table->integer('student_id');
        //     $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');

        // });
        Schema::create('classroom_teacher', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('classroom_id')->unsigned();
            $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('cascade');
            $table->integer('teacher_id')->unsigned();
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classrooms');
        // Schema::dropIfExists('classroom_student');
        Schema::dropIfExists('classroom_teacher');
    }
}
