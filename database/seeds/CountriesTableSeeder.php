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
        DB::table('countries')->delete();
        DB::table('countries')->insert([
            [
                'iso' => 'ng',
                'name' => 'nigeria',
                'status' =>'enabled',
                'created_at' => NULL,
                'updated_at' => NULL,
            ]
        ]);
    }
}