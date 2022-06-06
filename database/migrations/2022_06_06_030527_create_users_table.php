<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('id', true);
            $table->string('name');
            $table->string('email', 100);
            $table->timestamp('email_verified_at')->useCurrentOnUpdate()->useCurrent();
            $table->string('password', 100);
            $table->rememberToken()->nullable(false);
            $table->timestamp('created_at')->default('0000-00-00 00:00:00');
            $table->dateTime('updated')->default('0000-00-00 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
