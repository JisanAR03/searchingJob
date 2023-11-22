<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAvatarToUsers extends Migration
{
    public function up()
{
    Schema::table('Employers', function (Blueprint $table) {
        // if not exist, add the new column
        if (!Schema::hasColumn('Employers', 'avatar')) {
            $table->string('avatar')->default(config('chatify.user_avatar.default'));
        }
    });

    Schema::table('JobSeekers', function (Blueprint $table) {
        // if not exist, add the new column
        if (!Schema::hasColumn('JobSeekers', 'avatar')) {
            $table->string('avatar')->default(config('chatify.user_avatar.default'));
        }
    });
}

/**
 * Reverse the migrations.
 *
 * @return void
 */
public function down()
{
    Schema::table('Employers', function (Blueprint $table) {
        $table->dropColumn('avatar');
    });

    Schema::table('JobSeekers', function (Blueprint $table) {
        $table->dropColumn('avatar');
    });
}

}