<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type',50);
            $table->string('alea',50);
        });

        DB::table('user_types')->insert(
            array(
                array('id'   =>1, 'type' => 'Superuser','alea'=> 'SUPERADMIN'),
                array('id'   =>2, 'type' => 'Admin','alea'=> 'ADMIN'),
                array('id'   =>3, 'type' => 'Agent','alea'=> 'AGENT'),
                array('id'   =>4, 'type' => 'Loan Officer','alea'=> 'LOANOFFICER')
            )
        );
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_types');
    }
}
