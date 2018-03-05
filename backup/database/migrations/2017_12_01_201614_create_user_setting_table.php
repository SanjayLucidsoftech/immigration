<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_setting', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('torn_off_lo', ['1', '0'])->default('0');
            $table->string('craigslist_link');
            $table->string('spw_params',500);
            $table->string('vt_setting',500);
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
        Schema::dropIfExists('user_setting');
    }
}
