<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->unsignedInteger('ssn')->primary();
            $table->string('fname',255);
            $table->string('lname',255);
            $table->string('email',255)->unique();
            $table->char('phone',11)->nullable()->unique();
            $table->unsignedMediumInteger('salary');
            $table->unsignedTinyInteger('dept_id');
            $table->foreign('dept_id')->references('dept_num')->on('departments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
