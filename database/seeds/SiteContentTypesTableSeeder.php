<?php

use Illuminate\Database\Seeder;
use App\Models\SiteContentType;

class SiteContentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    \DB::table('site_content_types')->delete();
			
		SiteContentType::insert(array (
            0 => 
            array (
                'id' => 1,
                'content_type' => 'ContactUs',
                'created_at' => new DateTime,
				'updated_at' => new DateTime
            ),
            1 => 
            array (
                'id' => 2,
                'content_type' => 'AboutUs',
                'created_at' => new DateTime,
				'updated_at' => new DateTime
            ),
            2 => 
            array (
                'id' => 3,
                'content_type' => 'Home',
                'created_at' => new DateTime,
				'updated_at' => new DateTime
            ),
            3 => 
            array (
                'id' => 4,
                'content_type' => 'Terms',
                'created_at' => new DateTime,
				'updated_at' => new DateTime
            ),
            4 => 
            array (
                'id' => 5,
                'content_type' => 'Policy',
                'created_at' => new DateTime,
				'updated_at' => new DateTime
            ),
        ));
    }
}
