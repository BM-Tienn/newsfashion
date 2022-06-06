<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootwearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footwear', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('title', 50)->nullable();
            $table->string('slug')->nullable();
            $table->integer('price')->nullable();
            $table->string('size')->nullable();
            $table->string('type')->nullable();
            $table->integer('amount')->nullable();
            $table->string('image')->nullable();
            $table->string('tabs')->nullable();
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
        Schema::dropIfExists('footwear');
    }
}
