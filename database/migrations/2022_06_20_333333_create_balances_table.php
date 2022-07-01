<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balances', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->timestamps();

            $table->string('user_nickname')->unique();
            $table->foreign('user_nickname')
                ->references('nickname')->on('users')
                ->cascadeOnUpdate()->cascadeOnDelete();

            $table->unsignedDecimal('total')->default(0);
            $table->unsignedDecimal('own')->default(0);
            $table->unsignedDecimal('bonus')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balances');
    }
};
