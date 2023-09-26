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
            $table->id();

            $table->string('employee_name');
            $table->string('address');
            $table->date('birthdate');
            $table->integer('phone');
            $table->integer('national_number');
            $table->string('gender');
            $table->string('department');
            $table->string('position');
            $table->integer('salary');
            $table->integer('available');
            $table->longText('image');
            $table->longText('identity');
            $table->longText('criminal_record');
            $table->foreignId('department_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
