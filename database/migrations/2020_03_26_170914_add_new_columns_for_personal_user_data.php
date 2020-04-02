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
            $table->string('username')->after('password')->nullable()->unique();
            $table->integer('document')->after('username')->nullable()->unique();
            $table->integer('phone')->after('document')->nullable()->unique();
            $table->integer('card')->after('phone')->nullable()->unique();
            $table->string('address')->after('card')->nullable();
            $table->string('state')->after('address')->nullable();
            $table->string('country')->after('state')->nullable();
            $table->string('district')->after('country')->nullable();
            $table->string('additionalData')->after('district')->nullable();
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
