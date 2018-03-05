<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('users', function($table)
        {
           $table->string('name', 'first_name')->change();
        });

        Schema::table('users', function($table)
        {
            $table->string('last_name')->after('first_name');;
            $table->char('status_id',1);
            $table->integer('loan_officer_id')->index();
            $table->char('plan_id',1);
            $table->string('title');
            $table->string('web');
            $table->string('user_image');
            $table->string('nif',500)->comment('MLS sync. id')->index();
            $table->string('designation');
            $table->string('office_address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('office_phone',50);
            $table->string('alternat_phone',50);
            $table->string('slogan',500);
            $table->timestamp('expired_at');
            $table->string('companyname');
            $table->string('cmp_logo');
            $table->string('license_info');
            $table->string('bio',500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
