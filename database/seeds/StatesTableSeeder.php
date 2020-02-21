<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'abia',
                'slug' => 'abia',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'adamawa',
                'slug' => 'adamawa',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'akwa ibom',
                'slug' => 'akwa_ibom',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'anambra',
                'slug' => 'anambra',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'bauchi',
                'slug' => 'bauchi',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'bayelsa',
                'slug' => 'bayelsa',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'benue',
                'slug' => 'benue',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'borno',
                'slug' => 'borno',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'cross river',
                'slug' => 'cross_river',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'delta',
                'slug' => 'delta',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'ebonyi',
                'slug' => 'ebonyi',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'edo',
                'slug' => 'edo',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'ekiti',
                'slug' => 'ekiti',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'enugu',
                'slug' => 'enugu',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'fct',
                'slug' => 'fct',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'gombe',
                'slug' => 'gombe',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'imo',
                'slug' => 'imo',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'jigawa',
                'slug' => 'jigawa',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'kaduna',
                'slug' => 'kaduna',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'kano',
                'slug' => 'kano',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'katsina',
                'slug' => 'katsina',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'kebbi',
                'slug' => 'kebbi',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'kogi',
                'slug' => 'kogi',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'kwara',
                'slug' => 'kwara',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'lagos',
                'slug' => 'lagos',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'nasarawa',
                'slug' => 'nasarawa',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'niger',
                'slug' => 'niger',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'ogun',
                'slug' => 'ogun',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'ondo',
                'slug' => 'ondo',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'osun',
                'slug' => 'osun',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'oyo',
                'slug' => 'oyo',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'plateau',
                'slug' => 'plateau',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'rivers',
                'slug' => 'rivers',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'sokoto',
                'slug' => 'sokoto',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'taraba',
                'slug' => 'taraba',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'yobe',
                'slug' => 'yobe',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'zamfara',
                'slug' => 'zamfara',
                'status' =>'enabled',
                'country_iso' =>'ng',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}