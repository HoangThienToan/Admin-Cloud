<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('type', ['user', 'admin'])->after('email')->nullable();
            $table->bigInteger('data_limit')->after('type')->nullable();
            $table->json('domain')->after('data_limit')->nullable();
            $table->string('server_cloud', 255)->after('domain')->nullable();
            $table->dateTime('dateBegins')->after('server_cloud')->nullable();
            $table->dateTime('outOfDate')->after('dateBegins')->nullable();
            $table->string('key', 255)->after('outOfDate')->nullable();
            $table->string('emergency_code', 1000)->after('key')->nullable();
            $table->string('au_domain', 1000)->after('emergency_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['type', 'data_limit', 'domain', 'server_cloud', 'dateBegins', 'outOfDate', 'key', 'emergency_code', 'au_domain']);
        });
    }
}
