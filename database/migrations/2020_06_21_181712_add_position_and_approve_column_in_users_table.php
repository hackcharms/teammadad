<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPositionAndApproveColumnInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->tinyInteger('approved')->after('email')->default(0);
            $table->string('username')->after('email');
            $table->string('profile_pic')->after('email')->nullable();
            $table->tinyInteger('role')->comment('user:0,admin:1,administrator:2')->after('email')->default(0);
            $table->unsignedBigInteger('mobile_number')->unique()->after('email');
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
            $table->dropColumn('mobile_number');
            $table->dropColumn('role');
            $table->dropColumn('username');
            $table->dropColumn('approved');
            $table->dropColumn('profile_pic');
        });
    }
}
