<?php

use Illuminate\Database\Seeder;

class SurveySectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('survey_sections')->delete();
        
        \DB::table('survey_sections')->insert(array (
            0 => 
            array (
                'id' => 1,
                'survey_section_id' => NULL,
                'survey_header_id' => 1,
                'section_name' => 'Analysis of External Environment',
                'section_title' => 'Analysis of External Environment',
                'section_subheading' => 'Analysis of External Environment',
                'section_required_yn' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'survey_section_id' => NULL,
                'survey_header_id' => 1,
                'section_name' => 'Competition',
                'section_title' => 'Competition',
                'section_subheading' => 'Competition',
                'section_required_yn' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'survey_section_id' => NULL,
                'survey_header_id' => 1,
                'section_name' => 'Zone Study: Geographical Definition',
                'section_title' => 'Zone Study: Geographical Definition',
                'section_subheading' => 'Zone Study: Geographical Definition',
                'section_required_yn' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'survey_section_id' => NULL,
                'survey_header_id' => 1,
                'section_name' => 'Zone Study: Exclusivity',
                'section_title' => 'Zone Study: Exclusivity',
                'section_subheading' => 'Zone Study: Exclusivity',
                'section_required_yn' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'survey_section_id' => NULL,
                'survey_header_id' => 1,
                'section_name' => 'Zone Study: Visibility',
                'section_title' => 'Zone Study: Visibility',
                'section_subheading' => 'Zone Study: Visibility',
                'section_required_yn' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'survey_section_id' => NULL,
                'survey_header_id' => 1,
                'section_name' => 'Zone Study: Demographics',
                'section_title' => 'Zone Study: Demographics',
                'section_subheading' => 'Zone Study: Demographics',
                'section_required_yn' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'survey_section_id' => NULL,
                'survey_header_id' => 1,
                'section_name' => 'Zone Study: Traffic',
                'section_title' => 'Zone Study: Traffic',
                'section_subheading' => 'Zone Study: Traffic',
                'section_required_yn' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'survey_section_id' => NULL,
                'survey_header_id' => 1,
                'section_name' => 'Site Quality Assessment',
                'section_title' => 'Site Quality Assessment',
                'section_subheading' => 'Site Quality Assessment',
                'section_required_yn' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'survey_section_id' => 8,
                'survey_header_id' => 1,
                'section_name' => 'Location',
                'section_title' => 'Location',
                'section_subheading' => 'Location',
                'section_required_yn' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'survey_section_id' => 8,
                'survey_header_id' => 1,
                'section_name' => 'Appearance',
                'section_title' => 'Appearance',
                'section_subheading' => 'Appearance',
                'section_required_yn' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'survey_section_id' => 8,
                'survey_header_id' => 1,
                'section_name' => 'Facilities',
                'section_title' => 'Facilities',
                'section_subheading' => 'Facilities',
                'section_required_yn' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'survey_section_id' => 8,
                'survey_header_id' => 1,
                'section_name' => 'Business Operations',
                'section_title' => 'Business Operations',
                'section_subheading' => 'Business Operations',
                'section_required_yn' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'survey_section_id' => 8,
                'survey_header_id' => 1,
                'section_name' => 'Special Factors',
                'section_title' => 'Special Factors',
                'section_subheading' => 'Special Factors',
                'section_required_yn' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'survey_section_id' => NULL,
                'survey_header_id' => 1,
                'section_name' => 'Site Evaluation Tool',
                'section_title' => 'Site Evaluation Tool',
                'section_subheading' => 'Site Evaluation Tool',
                'section_required_yn' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'survey_section_id' => 14,
                'survey_header_id' => 1,
                'section_name' => 'Visibility',
                'section_title' => 'Visibility',
                'section_subheading' => 'Visibility',
                'section_required_yn' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'survey_section_id' => 14,
                'survey_header_id' => 1,
                'section_name' => 'Accessibility',
                'section_title' => 'Accessibility',
                'section_subheading' => 'Accessibility',
                'section_required_yn' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'survey_section_id' => 14,
                'survey_header_id' => 1,
                'section_name' => 'Traffic Flow',
                'section_title' => 'Traffic Flow',
                'section_subheading' => 'Traffic Flow',
                'section_required_yn' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'survey_section_id' => 14,
                'survey_header_id' => 1,
                'section_name' => 'Buying Area',
                'section_title' => 'Buying Area',
                'section_subheading' => 'Buying Area',
                'section_required_yn' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'survey_section_id' => 14,
                'survey_header_id' => 1,
                'section_name' => 'Facilities',
                'section_title' => 'Facilities',
                'section_subheading' => 'Facilities',
                'section_required_yn' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'survey_section_id' => 14,
                'survey_header_id' => 1,
                'section_name' => 'Potential NFR Product Selection',
                'section_title' => 'Potential NFR Product Selection',
                'section_subheading' => 'Potential NFR Product Selection',
                'section_required_yn' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}