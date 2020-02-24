<?php

use Illuminate\Database\Seeder;

class StationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stations')->delete();
        
        \DB::table('stations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Mobil Filling Station',
                'address' => 'Itire Rd, Idi Oro, Lagos',
                'phone' => '332323232',
                'email' => 'its@mobil.com',
                'organization_id' => NULL,
                'country_id' => 1,
                'state_id' => 2,
                'lga' => NULL,
                'lng' => NULL,
                'lat' => NULL,
                'created_at' => '2020-02-23 21:57:55',
                'updated_at' => '2020-02-23 21:57:55',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Total Filling Station',
                'address' => '42 Liverpool Rd, Apapa, Lagos',
                'phone' => '4343443434',
                'email' => 'yima@total.ng.com',
                'organization_id' => NULL,
                'country_id' => 1,
                'state_id' => 25,
                'lga' => NULL,
                'lng' => NULL,
                'lat' => NULL,
                'created_at' => '2020-02-23 21:58:49',
                'updated_at' => '2020-02-23 21:58:49',
            ),
        ));
        
        
    }
}