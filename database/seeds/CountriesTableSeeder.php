<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'iso' => 'ng',
                'name' => 'nigeria',
                'status' => 'enabled',
                'description' => NULL,
                'iso3' => NULL,
                'fips' => NULL,
                'continent' => NULL,
                'currency_code' => NULL,
                'currency_name' => NULL,
                'phone_prefix' => NULL,
                'postal_code' => NULL,
                'languages' => NULL,
                'geonameid' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}