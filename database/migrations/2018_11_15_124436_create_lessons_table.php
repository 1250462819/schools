<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('unit');
            $table->integer('classroom_id')->unsigned();
            $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('cascade');
            $table->timestamps();
        });
        // Schema::create('lesson_student', function (Blueprint $table) {
        //     $table->integer('lesson_id');
        //     $table->foreign('lesson_id')->references('id')->on('lessons')->onDelete('cascade');
        //     $table->integer('student_id');
        //     $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');

        // });
        // Schema::create('lesson_teacher', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('lesson_id');
        //     $table->foreign('lesson_id')->references('id')->on('lessons')->onDelete('cascade');
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
        Schema::dropIfExists('lessons');
        // Schema::dropIfExists('lesson_student');
        // Schema::dropIfExists('lesson_teacher');
    }
}
