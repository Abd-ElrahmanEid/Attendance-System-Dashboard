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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();

            $table->string('employee_name');
            $table->string('department');
            $table->string('position');
            $table->date('date_recorded');
            $table->time('time_recorded');
            $table->string('attended')->nullable();
            $table->string('absent')->nullable();
            $table->string('vacation')->nullable();
            $table->integer('bonus')->nullable();
            $table->integer('rival')->nullable();
            $table->longText('notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
