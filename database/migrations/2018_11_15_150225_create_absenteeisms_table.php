<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsenteeismsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absenteeisms', function (Blueprint $table) {
            $table->integer('id');
            $table->date('date');
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->integer('teacher_id')->unsigned();
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->integer('lesson_id')->unsigned();
            $table->foreign('lesson_id')->references('id')->on('lessons')->onDelete('cascade');
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
        Schema::dropIfExists('absenteeisms');
    }
}
