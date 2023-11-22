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
        Schema::create('JobSeekers', function (Blueprint $table) {
            $table->integer('JobSeekerID')->nullable(false)->autoIncrement();
            $table->string('FullName', 255)->nullable();
            $table->string('Email', 50)->nullable();
            $table->string('PasswordHash', 256)->nullable();
            $table->string('WorkingFor', 255)->nullable();
            $table->string('ProfilePhoto', 255)->nullable();
            $table->string('LinkedInURL', 255)->nullable();
            $table->string('PhoneNumber', 20)->nullable();
            $table->string('Location', 255)->nullable();
            $table->string('WorkTitle', 255)->nullable();
            $table->string('CurrentCompanyName', 255)->nullable();
            $table->dateTime('WorkStart')->nullable();
            $table->dateTime('WorkEnd')->nullable();
            $table->tinyInteger('AppExperienceReview')->nullable();
            $table->decimal('SalaryExpectation', 10, 2)->nullable();
            $table->string('Resume', 255)->nullable();
            $table->tinyInteger('AvailableForWork')->nullable();
            $table->tinyInteger('MessagePermit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('JobSeekers');
    }
};
