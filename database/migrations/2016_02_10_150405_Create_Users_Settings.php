<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Users_Settings;

class CreateUsersSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('default_role');
            $table->boolean('location')->comment = "0: off, 1: on";
            $table->boolean('register_enabled')->comment = "0: off, 1: on";
            $table->integer('default_active')->comment = "0: off, 1: email, 2: on";
            $table->boolean('welcome_email')->comment = "0: off, 1: on";
        });

        $settings = new Users_Settings;
        $settings->default_role = \Laralum::role('name', env('DEFAULT_ROLE_NAME', 'User'))->id;
        $settings->register_enabled = true;
        $settings->default_active = 2;
        $settings->welcome_email = false;
        $settings->location = false;
        $settings->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users_settings');
    }
}
