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
        Schema::create('JobPosts', function (Blueprint $table) {
            $table->integer('JobPostID')->nullable(false)->autoIncrement();
            $table->integer('EmployerID')->nullable();
            $table->string('JobTitle', 255)->nullable();
            $table->string('Category', 255)->nullable();
            $table->dateTime('PostDate')->nullable();
            $table->dateTime('PostExpired')->nullable();
            $table->decimal('Compensation', 10, 2)->nullable();
            $table->string('WorkType', 255)->nullable();
            $table->string('JobLocation', 255)->nullable();
            $table->text('Description')->nullable();
            $table->string('SalaryRange', 255)->nullable();
            $table->boolean('Active')->nullable()->default(1);
            $table->boolean('ApplyPermission')->default(1);
            $table->string('Experience', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('JobPosts');
    }
};
