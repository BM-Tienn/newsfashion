<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('user_id')->nullable()->index('user_id');
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('email', 100);
            $table->string('phone', 20);
            $table->string('address')->nullable();
            $table->string('city', 100)->nullable();
            $table->string('zip_code', 20)->nullable();
            $table->string('country', 100)->nullable();
            $table->integer('price')->nullable();
            $table->integer('total_amount')->nullable();
            $table->string('gross_product')->nullable();
            $table->integer('total')->nullable();
            $table->boolean('status')->nullable()->comment('1: New, 2:Confirmed,3: Completed,4: Cancel');
            $table->boolean('payment')->nullable()->comment('1: Credit Card, 2: Paypal , 3: Pay in cash');
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->dateTime('updated')->default('0000-00-00 00:00:00');
            $table->softDeletes()->nullable(false)->default('0000-00-00 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
