<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 40);
            $table->string('last_name', 40);
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('image', 60)->nullable();
            $table->string('cover', 60)->nullable();
            $table->string('description');
            $table->boolean('confirmed')->default(0);
            $table->string('confirmation_code')->nullable();
            $table->integer('status')->unsigned()->default(1);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
