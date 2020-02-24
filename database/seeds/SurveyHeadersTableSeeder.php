<?php

use Illuminate\Database\Seeder;

class SurveyHeadersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('survey_headers')->delete();
        
        \DB::table('survey_headers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'organization_id' => 1,
                'survey_name' => 'OVH Stations',
                'instructions' => 'Survey stations',
                'other_header_info' => 'OVH Station Survey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}