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
        Schema::table('JobApplications', function (Blueprint $table) {
            $table->foreign('JobSeekerID')->references('JobSeekerID')->on('JobSeekers');
        });

        Schema::table('JobPosts', function (Blueprint $table) {
            $table->foreign('EmployerID')->references('EmployerID')->on('Employers');
        });

        Schema::table('JobSeekerSkills', function (Blueprint $table) {
            $table->foreign('JobSeekerID')->references('JobSeekerID')->on('JobSeekers');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('JobApplications', function (Blueprint $table) {
            $table->dropForeign(['JobSeekerID']);
        });

        Schema::table('JobPosts', function (Blueprint $table) {
            $table->dropForeign(['EmployerID']);
        });

        Schema::table('JobSeekerSkills', function (Blueprint $table) {
            $table->dropForeign(['JobSeekerID']);
        });
    }
};
