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
                'name' => 'Chelsea Filling Station',
                'address' => '10 Old Aba road, PH',
                'phone' => '332323232',
                'email' => 'its@chelseastation.com',
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
                'name' => 'Rubby Station',
                'address' => '42 Liverpool Rd, Apapa, Lagos',
                'phone' => '4343443434',
                'email' => 'yima@yahoo.com',
                'organization_id' => NULL,
                'country_id' => 1,
                'state_id' => 25,
                'lga' => NULL,
                'lng' => NULL,
                'lat' => NULL,
                'created_at' => '2020-02-23 21:58:49',
                'updated_at' => '2020-02-23 21:58:49',
            ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Ponix Station',
                    'address' => '21 Ojora Road Ikoyi, Lagos',
                    'phone' => '123444938843',
                    'email' => 'yima@ponixz.com',
                    'organization_id' => NULL,
                    'country_id' => 1,
                    'state_id' => 25,
                    'lga' => NULL,
                    'lng' => NULL,
                    'lat' => NULL,
                    'created_at' => '2020-02-23 21:58:49',
                    'updated_at' => '2020-02-23 21:58:49',
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Wingoz Station',
                    'address' => '21 Old school road, Ikota, Lagos',
                    'phone' => '123444938843',
                    'email' => 'pamn@yahoo.com',
                    'organization_id' => NULL,
                    'country_id' => 1,
                    'state_id' => 25,
                    'lga' => NULL,
                    'lng' => NULL,
                    'lat' => NULL,
                    'created_at' => '2020-02-23 21:58:49',
                    'updated_at' => '2020-02-23 21:58:49',
                ),

            4 =>
                array (
                    'id' => 5,
                    'name' => 'Onoh Station',
                    'address' => '21 Nwafia Street, Enugu',
                    'phone' => '123444938843',
                    'email' => 'pasd@yahoo.com',
                    'organization_id' => NULL,
                    'country_id' => 1,
                    'state_id' => 25,
                    'lga' => NULL,
                    'lng' => NULL,
                    'lat' => NULL,
                    'created_at' => '2020-02-23 21:58:49',
                    'updated_at' => '2020-02-23 21:58:49',
                ),

            5 =>
                array (
                    'id' => 6,
                    'name' => 'Chizito Station',
                    'address' => '21 Aba, Abia state',
                    'phone' => '123444938843',
                    'email' => 'pasd@yahoo.com',
                    'organization_id' => NULL,
                    'country_id' => 1,
                    'state_id' => 25,
                    'lga' => NULL,
                    'lng' => NULL,
                    'lat' => NULL,
                    'created_at' => '2020-02-23 21:58:49',
                    'updated_at' => '2020-02-23 21:58:49',
                ),

            6 =>
                array (
                    'id' => 7,
                    'name' => 'Damzon Station',
                    'address' => '349 Redlane road, Imo State',
                    'phone' => '123444938843',
                    'email' => 'p4343asd@yahoo.com',
                    'organization_id' => NULL,
                    'country_id' => 1,
                    'state_id' => 25,
                    'lga' => NULL,
                    'lng' => NULL,
                    'lat' => NULL,
                    'created_at' => '2020-02-23 21:58:49',
                    'updated_at' => '2020-02-23 21:58:49',
                ),

            7 =>
                array (
                    'id' => 8,
                    'name' => 'Timax Oil Station',
                    'address' => '77 Fireforx street, Abuja',
                    'phone' => '123444938843',
                    'email' => 'p4343asd@yahoo.com',
                    'organization_id' => NULL,
                    'country_id' => 1,
                    'state_id' => 25,
                    'lga' => NULL,
                    'lng' => NULL,
                    'lat' => NULL,
                    'created_at' => '2020-02-23 21:58:49',
                    'updated_at' => '2020-02-23 21:58:49',
                ),

            8 =>
                array (
                    'id' => 9,
                    'name' => 'Chuxel Station',
                    'address' => '77 Fireforx street, Abuja',
                    'phone' => '123444938843',
                    'email' => 'chuxel@yahoo.com',
                    'organization_id' => NULL,
                    'country_id' => 1,
                    'state_id' => 25,
                    'lga' => NULL,
                    'lng' => NULL,
                    'lat' => NULL,
                    'created_at' => '2020-02-23 21:58:49',
                    'updated_at' => '2020-02-23 21:58:49',
                ),

            9 =>
                array (
                    'id' => 10,
                    'name' => 'Emmma Station',
                    'address' => '77 Fireforx street, Abuja',
                    'phone' => '123444938843',
                    'email' => 'chuxel@yahoo.com',
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