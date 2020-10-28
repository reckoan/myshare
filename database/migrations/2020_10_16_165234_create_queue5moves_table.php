<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQueue5movesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('queue5moves', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->text('bitcoin_address');
            $table->string('username')->nullable();
            $table->string('method')->nullable();
            $table->boolean('isPayed')->default(false);
            $table->string('payid')->nullable();
            $table->string('payDate')->nullable();
            $table->string('pay_amount')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('queue5moves');
    }
}
