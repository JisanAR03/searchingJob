<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('JobSeekerSkills', function (Blueprint $table) {
            $table->integer('JobSeekerSkillID')->nullable(false)->autoIncrement();
            $table->integer('JobSeekerID')->nullable();
            $table->integer('SkillID')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('JobSeekerSkills');
    }
};
