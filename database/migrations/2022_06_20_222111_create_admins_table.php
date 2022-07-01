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
        Schema::create('admins', function (Blueprint $table) {
            $table->id()->from(101);
            $table->timestamps();

            $table->string('name');
            $table->string('first_name');
            $table->string('last_name')->nullable();

            $table->string('email')->unique();

            $table->string('role')->default('admin');
            $table->boolean('active')->default(true);

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

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
        Schema::dropIfExists('admins');
    }
};
