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
        Schema::create('centres', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('address')->nullable(); // Fixed typo from 'adddress' to 'address'
            $table->string('city')->nullable(); // Changed 'city' from text to string
            $table->string('pincode', 10)->nullable(); // Changed 'pincode' from text to string, with length limit
            $table->string('mobile', 20)->nullable(); // Kept mobile as string with a length limit
            $table->string('website')->nullable();
            $table->foreignId('admin')->nullable()->constrained('users')->onDelete('set null'); // Foreign key to 'users'
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
        Schema::dropIfExists('centres');
    }
};
