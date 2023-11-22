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
        Schema::create('Employers', function (Blueprint $table) {
            $table->integer('EmployerID')->nullable(false)->autoIncrement();
            $table->string('CompanyName', 255)->nullable();
            $table->string('BusinessEmail', 50)->nullable();
            $table->string('PasswordHash', 256)->nullable();
            $table->string('FullName', 255)->nullable();
            $table->string('RoleInCompany', 255)->nullable();
            $table->longText('AboutCompany')->nullable();
            $table->longText('CompanyMission')->nullable();
            $table->string('WebsiteURL', 255)->nullable();
            $table->string('Logo', 255)->nullable();
            $table->string('Banner', 255)->nullable();
            $table->string('Email', 50)->nullable();
            $table->string('LinkedInURL', 255)->nullable();
            $table->string('PhoneNumber', 20)->nullable();
            $table->string('Location', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('Employers');
    }
};
