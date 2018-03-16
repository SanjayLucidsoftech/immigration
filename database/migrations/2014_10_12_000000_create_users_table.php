<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('email',191)->unique();
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name')->nullable($value = true);
            $table->char('type_id',1)->default('3');
            $table->char('status_id',1)->default('0');;
            $table->string('city')->nullable($value = true);
            $table->string('state')->nullable($value = true);
            $table->string('zip')->nullable($value = true);
            $table->string('office_phone',50)->nullable($value = true);
            $table->string('alternat_phone',50)->nullable($value = true);
            $table->timestamp('expired_at')->nullable($value = true);
            $table->rememberToken()->nullable($value = true);
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
        Schema::dropIfExists('users');
    }
}
