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
        Schema::create('results', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('exam_id')->nullable();
        $table->unsignedBigInteger('batch_id')->nullable();
        $table->unsignedBigInteger('course_id')->nullable();
        $table->unsignedBigInteger('centre_id')->nullable();
        $table->string('reg_no')->nullable(); 
        $table->unsignedInteger('marks')->nullable();
        $table->unsignedInteger('correct_answer_count')->nullable();
        $table->unsignedInteger('wrong_answer_count')->nullable();
        $table->decimal('percentage', 5, 2)->nullable(); 
        $table->string('grade', 5)->nullable(); 
        $table->enum('result', ['pass', 'fail'])->nullable();
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
        Schema::dropIfExists('results');
    }
};
