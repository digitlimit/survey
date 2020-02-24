<?php

use Illuminate\Database\Seeder;

class OrganizationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('organizations')->delete();
        
        \DB::table('organizations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'OVH Station Survey',
                'address_1' => '8 Kayode Street',
                'address_2' => NULL,
                'address_3' => NULL,
                'phone_1' => '08038834192',
                'phone_2' => NULL,
                'phone_3' => NULL,
                'email' => 'info@ovhenergy.com',
                'country_id' => 1,
                'state_id' => 1,
                'lga' => NULL,
                'lng' => NULL,
                'lat' => NULL,
                'created_at' => '2020-02-22 09:25:02',
                'updated_at' => '2020-02-22 09:25:02',
            ),
        ));
        
        
    }
}