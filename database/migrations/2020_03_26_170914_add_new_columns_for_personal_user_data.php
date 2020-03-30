<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewColumnsForPersonalUserData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->after('remember_token')->nullable()->unique();
            $table->integer('document')->after('username')->nullable()->unique();
            $table->integer('phone')->after('document')->nullable()->unique();
            $table->integer('card')->after('phone')->nullable()->unique();
            $table->string('location')->after('card')->nullable();
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
            //
        });
    }
}
