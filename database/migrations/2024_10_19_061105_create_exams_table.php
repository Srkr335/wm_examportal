<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('exam_name')->nullable();
            $table->integer('course_id')->nullable();
            $table->integer('batch_id')->nullable();
            $table->integer('exam_centre_id')->nullable();
            $table->integer('module_id')->nullable();
            $table->integer('marks')->nullable(); 
            $table->integer('time_in_minutes')->nullable(); 
            $table->double('question_weightage')->nullable(); 
            $table->date('exam_date')->nullable(); 
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('exams');
    }
};
