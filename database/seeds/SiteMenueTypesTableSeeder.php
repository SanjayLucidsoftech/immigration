<?php

use Illuminate\Database\Seeder;
use App\Models\SiteMenueType;

class SiteMenueTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('site_menue_types')->delete();
			
		SiteMenueType::insert(array (
            0 => 
            array (
                'id' => 1,
                'menue_type' => 'header',
                'created_at' => new DateTime,
				'updated_at' => new DateTime
            ),
            1 => 
            array (
                'id' => 2,
                'menue_type' => 'footer',
                'created_at' => new DateTime,
				'updated_at' => new DateTime
            ),
            2 => 
            array (
                'id' => 3,
                'menue_type' => 'left',
                'created_at' => new DateTime,
				'updated_at' => new DateTime
            ),
            3 => 
            array (
                'id' => 4,
                'menue_type' => 'right',
                'created_at' => new DateTime,
				'updated_at' => new DateTime
            )
        ));
    }
}
