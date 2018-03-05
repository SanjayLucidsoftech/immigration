<?php

use Illuminate\Database\Seeder;

class PostalCodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // =============================================================
        // file Path -> Project/app/configs/database.php
        // get the database name, database username, database password
        // =============================================================
        $db     = \Config::get('database.connections.mysql.database');
        $user   = \Config::get('database.connections.mysql.username');
        $pass   = \Config::get('database.connections.mysql.password');

        // $this->command->info($db);
        // $this->command->info($user);
        // $this->command->info($pass);

        // running command line import in php code
        exec("mysql -u " . $user . " -p" . $pass . " " . $db . " < postal_codes.sql");
        // postal_codes.sql is inside root folder
    }
}
