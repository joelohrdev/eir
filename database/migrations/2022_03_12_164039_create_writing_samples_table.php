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
        Schema::create('writing_samples', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained();
            $table->text('sample_one')->nullable();
            $table->integer('sample_one_count')->default(0);
            $table->text('sample_two')->nullable();
            $table->integer('sample_two_count')->default(0);
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
        Schema::dropIfExists('writing_samples');
    }
};
