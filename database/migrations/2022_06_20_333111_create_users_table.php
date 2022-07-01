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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->timestamps();

            $table->string('nickname')->unique();
            $table->string('account_id')->unique();
            $table->string('access_token');
            $table->string('expires_at');

            $table->string('name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();

            // $table->unsignedDecimal('balance_total')->default(0);
            // $table->unsignedDecimal('balance_own')->default(0);
            // $table->unsignedDecimal('balance_bonus')->default(0);

            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();

            $table->boolean('active')->default(true);
            // $table->boolean('admin')->default(false);
            // $table->string('role')->default('user');
            // $table->uuid('uuid')->unique()->nullable()->default(null);
            $table->string('password')->nullable();

            $table->rememberToken();
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
};
