<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
             $table->bigIncrements('id');
             $table->string('lesson_time');
             $table->string('lesson_date');
             $table->string('location');
             $table->string('teacher_name');
             $table->string('subject_name');
             $table->unsignedBigInteger('user_id')->nullable();
             $table->unsignedBigInteger('subject_id')->nullable();
             $table->unsignedBigInteger('teacher_id')->nullable();
             $table->timestamps();
         });
         Schema::table('lessons', function (Blueprint $table){
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
             $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
             $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
           });
     }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
