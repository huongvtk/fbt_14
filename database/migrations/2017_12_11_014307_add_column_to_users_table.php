<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'username')->unique();
            $table->string('fullname');
            $table->date('date_birth')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('phone');
            $table->tinyInteger('role');
            $table->integer('booking_id');
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
            $table->dropColumn('fullname');
            $table->dropColumn('date_birth');
            $table->dropColumn('gender');
            $table->dropColumn('address');
            $table->dropColumn('phone');
            $table->dropColumn('role');
            $table->dropColumn('booking_id');
        });
    }
}
