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
        Schema::create('JobApplications', function (Blueprint $table) {
            $table->integer('JobApplicationID')->nullable(false)->autoIncrement();
            $table->integer('JobSeekerID')->nullable();
            $table->integer('JobPostID')->nullable();
            $table->string('Email', 50)->nullable();
            $table->string('FullName', 255)->nullable();
            $table->string('PhoneNumber', 20)->nullable();
            $table->string('Location', 255)->nullable();
            $table->string('CurrentRole', 255)->nullable();
            $table->text('CoverLetterOptional')->nullable();
            $table->text('CoverLetter')->nullable();
            $table->tinyInteger('AlertForFutureJobs')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('JobApplications');
    }
};
