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
        //php artisan make:migration add_gender_to_students_table --table=students
        //$table->enum('gender',['m','f'])->unique();
        //and
        //public function down()
        // {
        //     $table->dropColumn('gender');
        // }
        // php artisan migrate:fresh
        /// php artisan migrate:rollback     drop all tables call down function
        Schema::create('students', function (Blueprint $table) {
            $table->integer('id')->unsigned()->primary();
            $table->string('name', 100);
            $table->string('email')->unique();
            $table->char('phone', 11)->unique();
            //  $table->foreignId("");//only with bigint unsigned in stds
            $table->tinyInteger('department_id')->unsigned();
            //->onDelete(); ->onCascade();
            //$table->foreign('department_id')->references('id')->on('departments')->onDelete();
            $table->foreign('department_id')->references('id')->on('departments');
            $table->enum('gender', ['m', 'f']);
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
        Schema::dropIfExists('students');
    }
};