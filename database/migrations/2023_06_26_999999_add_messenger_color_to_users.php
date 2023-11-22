<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMessengerColorToUsers extends Migration
{
    public function up()
{
    Schema::table('Employers', function (Blueprint $table) {
        if (!Schema::hasColumn('Employers', 'messenger_color')) {
            $table->string('messenger_color')->nullable();
        }
    });

    Schema::table('JobSeekers', function (Blueprint $table) {
        if (!Schema::hasColumn('JobSeekers', 'messenger_color')) {
            $table->string('messenger_color')->nullable();
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
        $table->dropColumn('messenger_color');
    });

    Schema::table('JobSeekers', function (Blueprint $table) {
        $table->dropColumn('messenger_color');
    });
}

}
