<?php

use Illuminate\Database\Seeder;

class OptionChoicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('option_choices')->delete();
        
        \DB::table('option_choices')->insert(array (
            0 => 
            array (
                'id' => 1,
                'option_group_id' => 1,
                'input_type_id' => NULL,
                'option_choice_name' => 'Stable',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'option_group_id' => 1,
                'input_type_id' => NULL,
                'option_choice_name' => 'Not so Stable',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'option_group_id' => 1,
                'input_type_id' => NULL,
                'option_choice_name' => 'Unstable',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'option_group_id' => 2,
                'input_type_id' => NULL,
                'option_choice_name' => 'Viable',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'option_group_id' => 2,
                'input_type_id' => NULL,
                'option_choice_name' => 'Not so Viable',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'option_group_id' => 2,
                'input_type_id' => NULL,
                'option_choice_name' => 'Unviable',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'option_group_id' => 3,
                'input_type_id' => NULL,
                'option_choice_name' => 'Vibrant',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'option_group_id' => 3,
                'input_type_id' => NULL,
                'option_choice_name' => 'Not so Vibrant',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'option_group_id' => 3,
                'input_type_id' => NULL,
                'option_choice_name' => 'Non-Vibrant',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'option_group_id' => 4,
                'input_type_id' => NULL,
                'option_choice_name' => 'Advanced',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'option_group_id' => 4,
                'input_type_id' => NULL,
                'option_choice_name' => 'Not so Advanced',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'option_group_id' => 4,
                'input_type_id' => NULL,
                'option_choice_name' => 'Lagging',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'option_group_id' => 5,
                'input_type_id' => NULL,
                'option_choice_name' => 'Favourable',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'option_group_id' => 5,
                'input_type_id' => NULL,
                'option_choice_name' => 'Not so Favourable',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'option_group_id' => 5,
                'input_type_id' => NULL,
                'option_choice_name' => 'Unfavourable',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'option_group_id' => 6,
                'input_type_id' => NULL,
                'option_choice_name' => 'Aggressive Upgrade',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'option_group_id' => 6,
                'input_type_id' => NULL,
                'option_choice_name' => 'Rebranding',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'option_group_id' => 6,
                'input_type_id' => NULL,
                'option_choice_name' => 'Moderate',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'option_group_id' => 6,
                'input_type_id' => NULL,
                'option_choice_name' => 'No upgrade',
                'weight' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'option_group_id' => 7,
                'input_type_id' => NULL,
                'option_choice_name' => 'WP Discount',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'option_group_id' => 7,
                'input_type_id' => NULL,
                'option_choice_name' => 'Sales Promo',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'option_group_id' => 7,
                'input_type_id' => NULL,
                'option_choice_name' => 'Advertising',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'option_group_id' => 7,
                'input_type_id' => NULL,
                'option_choice_name' => 'None',
                'weight' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'option_group_id' => 8,
                'input_type_id' => NULL,
                'option_choice_name' => 'Mainly CODO',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'option_group_id' => 8,
                'input_type_id' => NULL,
                'option_choice_name' => 'Mixed',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'option_group_id' => 8,
                'input_type_id' => NULL,
                'option_choice_name' => 'Mainly DODO',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'option_group_id' => 8,
                'input_type_id' => NULL,
                'option_choice_name' => 'None',
                'weight' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'option_group_id' => 9,
                'input_type_id' => NULL,
                'option_choice_name' => 'Urban',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'option_group_id' => 9,
                'input_type_id' => NULL,
                'option_choice_name' => 'Semi-rural',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'option_group_id' => 9,
                'input_type_id' => NULL,
                'option_choice_name' => 'Rural',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'option_group_id' => 10,
                'input_type_id' => NULL,
                'option_choice_name' => 'Airport',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'option_group_id' => 10,
                'input_type_id' => NULL,
                'option_choice_name' => 'Market',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'option_group_id' => 10,
                'input_type_id' => NULL,
                'option_choice_name' => 'School',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'option_group_id' => 10,
                'input_type_id' => NULL,
                'option_choice_name' => 'Motor Park',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'option_group_id' => 10,
                'input_type_id' => NULL,
                'option_choice_name' => 'Estate',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'option_group_id' => 10,
                'input_type_id' => NULL,
                'option_choice_name' => 'Church/Mosque',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'option_group_id' => 10,
                'input_type_id' => NULL,
                'option_choice_name' => 'Supermarket/Mall',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'option_group_id' => 10,
                'input_type_id' => NULL,
                'option_choice_name' => 'Others',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'option_group_id' => 11,
                'input_type_id' => NULL,
                'option_choice_name' => 'Comments',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'option_group_id' => 12,
                'input_type_id' => NULL,
                'option_choice_name' => 'Independent',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'option_group_id' => 12,
                'input_type_id' => NULL,
                'option_choice_name' => 'Conoil',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'option_group_id' => 12,
                'input_type_id' => NULL,
                'option_choice_name' => 'Forte',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'option_group_id' => 12,
                'input_type_id' => NULL,
                'option_choice_name' => 'MRS',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'option_group_id' => 12,
                'input_type_id' => NULL,
                'option_choice_name' => 'NNPC',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'option_group_id' => 12,
                'input_type_id' => NULL,
                'option_choice_name' => 'Oando',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'option_group_id' => 12,
                'input_type_id' => NULL,
                'option_choice_name' => 'Total',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'option_group_id' => 12,
                'input_type_id' => NULL,
                'option_choice_name' => 'None',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'option_group_id' => 13,
                'input_type_id' => NULL,
                'option_choice_name' => 'Independent',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'option_group_id' => 13,
                'input_type_id' => NULL,
                'option_choice_name' => 'Conoil',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'option_group_id' => 13,
                'input_type_id' => NULL,
                'option_choice_name' => 'Forte',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'option_group_id' => 13,
                'input_type_id' => NULL,
                'option_choice_name' => 'MRS',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'option_group_id' => 13,
                'input_type_id' => NULL,
                'option_choice_name' => 'NNPC',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'option_group_id' => 13,
                'input_type_id' => NULL,
                'option_choice_name' => 'Oando',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'option_group_id' => 13,
                'input_type_id' => NULL,
                'option_choice_name' => 'Total',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'option_group_id' => 13,
                'input_type_id' => NULL,
                'option_choice_name' => 'None',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'option_group_id' => 14,
                'input_type_id' => NULL,
                'option_choice_name' => '>5km',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'option_group_id' => 14,
                'input_type_id' => NULL,
                'option_choice_name' => '2km - 5km',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'option_group_id' => 14,
                'input_type_id' => NULL,
                'option_choice_name' => '500m - 1km',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'option_group_id' => 14,
                'input_type_id' => NULL,
                'option_choice_name' => '300m - 500m',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'option_group_id' => 14,
                'input_type_id' => NULL,
                'option_choice_name' => '200m - 300m',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'option_group_id' => 14,
                'input_type_id' => NULL,
                'option_choice_name' => '100m - 200m',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'option_group_id' => 14,
                'input_type_id' => NULL,
                'option_choice_name' => '50-100m',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'option_group_id' => 14,
                'input_type_id' => NULL,
                'option_choice_name' => '<50m',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'option_group_id' => 15,
                'input_type_id' => NULL,
                'option_choice_name' => '1',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'option_group_id' => 15,
                'input_type_id' => NULL,
                'option_choice_name' => '2',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'option_group_id' => 15,
                'input_type_id' => NULL,
                'option_choice_name' => '3',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'option_group_id' => 15,
                'input_type_id' => NULL,
                'option_choice_name' => '4',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'option_group_id' => 15,
                'input_type_id' => NULL,
                'option_choice_name' => '5',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'option_group_id' => 15,
                'input_type_id' => NULL,
                'option_choice_name' => '6',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'option_group_id' => 15,
                'input_type_id' => NULL,
                'option_choice_name' => '7',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'option_group_id' => 15,
                'input_type_id' => NULL,
                'option_choice_name' => '>7',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'option_group_id' => 16,
                'input_type_id' => NULL,
                'option_choice_name' => '1',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'option_group_id' => 16,
                'input_type_id' => NULL,
                'option_choice_name' => '2',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'option_group_id' => 16,
                'input_type_id' => NULL,
                'option_choice_name' => '3',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'option_group_id' => 16,
                'input_type_id' => NULL,
                'option_choice_name' => '4',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'option_group_id' => 16,
                'input_type_id' => NULL,
                'option_choice_name' => '5',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'option_group_id' => 16,
                'input_type_id' => NULL,
                'option_choice_name' => '6',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'option_group_id' => 16,
                'input_type_id' => NULL,
                'option_choice_name' => '7',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'option_group_id' => 16,
                'input_type_id' => NULL,
                'option_choice_name' => '>7',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'option_group_id' => 17,
                'input_type_id' => NULL,
                'option_choice_name' => '>200M',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'option_group_id' => 17,
                'input_type_id' => NULL,
                'option_choice_name' => '100-199m',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'option_group_id' => 17,
                'input_type_id' => NULL,
                'option_choice_name' => '50-99m',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'option_group_id' => 17,
                'input_type_id' => NULL,
                'option_choice_name' => '<50m',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'option_group_id' => 18,
                'input_type_id' => NULL,
                'option_choice_name' => 'Partial',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'option_group_id' => 18,
                'input_type_id' => NULL,
                'option_choice_name' => 'Total',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'option_group_id' => 18,
                'input_type_id' => NULL,
                'option_choice_name' => 'None',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'option_group_id' => 19,
                'input_type_id' => NULL,
            'option_choice_name' => 'Building(s)',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'option_group_id' => 19,
                'input_type_id' => NULL,
                'option_choice_name' => 'Trees/Bushes',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'option_group_id' => 19,
                'input_type_id' => NULL,
                'option_choice_name' => 'Bend',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'option_group_id' => 19,
                'input_type_id' => NULL,
                'option_choice_name' => 'Hill',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'option_group_id' => 20,
                'input_type_id' => NULL,
                'option_choice_name' => 'Residential',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'option_group_id' => 20,
                'input_type_id' => NULL,
                'option_choice_name' => 'Commercial',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'option_group_id' => 20,
                'input_type_id' => NULL,
                'option_choice_name' => 'Highway',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'option_group_id' => 21,
                'input_type_id' => NULL,
                'option_choice_name' => 'Upper Class/Highbrow',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'option_group_id' => 21,
                'input_type_id' => NULL,
                'option_choice_name' => 'Middle Class',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'option_group_id' => 21,
                'input_type_id' => NULL,
                'option_choice_name' => 'Lower Class',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'option_group_id' => 22,
                'input_type_id' => NULL,
                'option_choice_name' => 'Fully Developed',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'option_group_id' => 22,
                'input_type_id' => NULL,
                'option_choice_name' => 'Developing',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'option_group_id' => 22,
                'input_type_id' => NULL,
                'option_choice_name' => 'Scanty',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'option_group_id' => 23,
                'input_type_id' => NULL,
                'option_choice_name' => '>1m',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'option_group_id' => 23,
                'input_type_id' => NULL,
                'option_choice_name' => '750k - 999k',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'option_group_id' => 23,
                'input_type_id' => NULL,
                'option_choice_name' => '500k - 749k',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'option_group_id' => 23,
                'input_type_id' => NULL,
                'option_choice_name' => '300k - 499k',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'option_group_id' => 23,
                'input_type_id' => NULL,
                'option_choice_name' => '101k - 299k',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'option_group_id' => 23,
                'input_type_id' => NULL,
                'option_choice_name' => '<100k',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'option_group_id' => 24,
                'input_type_id' => NULL,
                'option_choice_name' => '< 10,000',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'option_group_id' => 24,
                'input_type_id' => NULL,
                'option_choice_name' => '10,000 - 29,999',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'option_group_id' => 24,
                'input_type_id' => NULL,
                'option_choice_name' => '30,000 - 49,999',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'option_group_id' => 24,
                'input_type_id' => NULL,
                'option_choice_name' => '> 50,000',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'option_group_id' => 25,
                'input_type_id' => NULL,
                'option_choice_name' => '0 – 5,000/day',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'option_group_id' => 25,
                'input_type_id' => NULL,
                'option_choice_name' => '5,001 – 10,000/day',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'option_group_id' => 25,
                'input_type_id' => NULL,
                'option_choice_name' => '10,001 – 15,000/day',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'option_group_id' => 25,
                'input_type_id' => NULL,
                'option_choice_name' => '15,001 – 20,000/day',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'option_group_id' => 25,
                'input_type_id' => NULL,
                'option_choice_name' => '>20,000/day',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'option_group_id' => 26,
                'input_type_id' => NULL,
                'option_choice_name' => 'Private',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'option_group_id' => 26,
                'input_type_id' => NULL,
                'option_choice_name' => 'Commercial',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'option_group_id' => 26,
                'input_type_id' => NULL,
                'option_choice_name' => 'Transient',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'option_group_id' => 26,
                'input_type_id' => NULL,
                'option_choice_name' => 'Long distance',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'option_group_id' => 27,
                'input_type_id' => NULL,
                'option_choice_name' => 'Single Lane',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'option_group_id' => 27,
                'input_type_id' => NULL,
                'option_choice_name' => 'Dual Lane with median barrier',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'option_group_id' => 27,
                'input_type_id' => NULL,
                'option_choice_name' => 'Dual lane',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'option_group_id' => 27,
                'input_type_id' => NULL,
                'option_choice_name' => 'Expressway',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'option_group_id' => 28,
                'input_type_id' => NULL,
                'option_choice_name' => 'Low speed',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'option_group_id' => 28,
                'input_type_id' => NULL,
                'option_choice_name' => 'Medium Speed',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'option_group_id' => 28,
                'input_type_id' => NULL,
                'option_choice_name' => 'High speed',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'option_group_id' => 28,
                'input_type_id' => NULL,
                'option_choice_name' => 'Expressway',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'option_group_id' => 29,
                'input_type_id' => NULL,
                'option_choice_name' => 'Yes',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'option_group_id' => 29,
                'input_type_id' => NULL,
                'option_choice_name' => 'No',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'option_group_id' => 30,
                'input_type_id' => NULL,
                'option_choice_name' => 'Good',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'option_group_id' => 30,
                'input_type_id' => NULL,
                'option_choice_name' => 'Fair',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'option_group_id' => 30,
                'input_type_id' => NULL,
                'option_choice_name' => 'Poor',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'option_group_id' => 31,
                'input_type_id' => NULL,
                'option_choice_name' => 'Excellent',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'option_group_id' => 31,
                'input_type_id' => NULL,
                'option_choice_name' => 'Good',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'option_group_id' => 31,
                'input_type_id' => NULL,
                'option_choice_name' => 'Poor',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'option_group_id' => 32,
                'input_type_id' => NULL,
                'option_choice_name' => 'Permanent',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'option_group_id' => 32,
                'input_type_id' => NULL,
                'option_choice_name' => 'Temporal',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'option_group_id' => 32,
                'input_type_id' => NULL,
                'option_choice_name' => 'N/A',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'option_group_id' => 33,
                'input_type_id' => NULL,
                'option_choice_name' => 'Good',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'option_group_id' => 33,
                'input_type_id' => NULL,
                'option_choice_name' => 'Fair',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'option_group_id' => 33,
                'input_type_id' => NULL,
                'option_choice_name' => 'Poor',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'option_group_id' => 34,
                'input_type_id' => NULL,
                'option_choice_name' => 'Good',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'option_group_id' => 34,
                'input_type_id' => NULL,
                'option_choice_name' => 'Fair',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'option_group_id' => 34,
                'input_type_id' => NULL,
                'option_choice_name' => 'Poor',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'option_group_id' => 35,
                'input_type_id' => NULL,
                'option_choice_name' => 'Good',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'option_group_id' => 35,
                'input_type_id' => NULL,
                'option_choice_name' => 'Fair',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'option_group_id' => 35,
                'input_type_id' => NULL,
                'option_choice_name' => 'Poor',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'option_group_id' => 36,
                'input_type_id' => NULL,
                'option_choice_name' => '<1 year',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'option_group_id' => 36,
                'input_type_id' => NULL,
                'option_choice_name' => '1-5 years',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'option_group_id' => 36,
                'input_type_id' => NULL,
                'option_choice_name' => '>5 years',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'option_group_id' => 37,
                'input_type_id' => 7,
                'option_choice_name' => 'Number of Bays',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'option_group_id' => 38,
                'input_type_id' => 7,
                'option_choice_name' => 'Number of Islands',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'option_group_id' => 39,
                'input_type_id' => 7,
            'option_choice_name' => 'Canopy (No. of Stanchions)',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'option_group_id' => 40,
                'input_type_id' => NULL,
                'option_choice_name' => 'Good',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'option_group_id' => 40,
                'input_type_id' => NULL,
                'option_choice_name' => 'Fair',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'option_group_id' => 40,
                'input_type_id' => NULL,
                'option_choice_name' => 'Poor',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'option_group_id' => 41,
                'input_type_id' => NULL,
                'option_choice_name' => 'Big',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'option_group_id' => 41,
                'input_type_id' => NULL,
                'option_choice_name' => 'Medium',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'option_group_id' => 41,
                'input_type_id' => NULL,
                'option_choice_name' => 'Small',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'option_group_id' => 42,
                'input_type_id' => 7,
            'option_choice_name' => 'Storage Capacity (Litres)',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'option_group_id' => 43,
                'input_type_id' => NULL,
                'option_choice_name' => '>12 hrs',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'option_group_id' => 43,
                'input_type_id' => NULL,
                'option_choice_name' => '<12 hrs',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'option_group_id' => 44,
                'input_type_id' => NULL,
                'option_choice_name' => 'Good',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'option_group_id' => 44,
                'input_type_id' => NULL,
                'option_choice_name' => 'Fair',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'option_group_id' => 44,
                'input_type_id' => NULL,
                'option_choice_name' => 'Poor',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'option_group_id' => 45,
                'input_type_id' => NULL,
                'option_choice_name' => 'Wide',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'option_group_id' => 45,
                'input_type_id' => NULL,
                'option_choice_name' => 'Moderate',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'option_group_id' => 45,
                'input_type_id' => NULL,
                'option_choice_name' => 'Limited',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'option_group_id' => 46,
                'input_type_id' => NULL,
                'option_choice_name' => 'Major Marketers',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'option_group_id' => 47,
                'input_type_id' => NULL,
                'option_choice_name' => 'Market',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'option_group_id' => 47,
                'input_type_id' => NULL,
                'option_choice_name' => 'Minus 1',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'option_group_id' => 47,
                'input_type_id' => NULL,
                'option_choice_name' => '>Minus 1',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'option_group_id' => 48,
                'input_type_id' => NULL,
                'option_choice_name' => 'Yes',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'option_group_id' => 48,
                'input_type_id' => NULL,
                'option_choice_name' => 'No',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'option_group_id' => 49,
                'input_type_id' => NULL,
                'option_choice_name' => 'Good',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'option_group_id' => 49,
                'input_type_id' => NULL,
                'option_choice_name' => 'Fair',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'option_group_id' => 49,
                'input_type_id' => NULL,
                'option_choice_name' => 'Poor',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'option_group_id' => 50,
                'input_type_id' => NULL,
                'option_choice_name' => 'Good',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'option_group_id' => 50,
                'input_type_id' => NULL,
                'option_choice_name' => 'Fair',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'option_group_id' => 50,
                'input_type_id' => NULL,
                'option_choice_name' => 'Poor',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'option_group_id' => 51,
                'input_type_id' => NULL,
                'option_choice_name' => 'Good',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'option_group_id' => 51,
                'input_type_id' => NULL,
                'option_choice_name' => 'Fair',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'option_group_id' => 51,
                'input_type_id' => NULL,
                'option_choice_name' => 'Poor',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'option_group_id' => 52,
                'input_type_id' => NULL,
                'option_choice_name' => 'Good',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'option_group_id' => 52,
                'input_type_id' => NULL,
                'option_choice_name' => 'Fair',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'option_group_id' => 52,
                'input_type_id' => NULL,
                'option_choice_name' => 'Poor',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'option_group_id' => 53,
                'input_type_id' => NULL,
                'option_choice_name' => 'Good',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'option_group_id' => 53,
                'input_type_id' => NULL,
                'option_choice_name' => 'Fair',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'option_group_id' => 53,
                'input_type_id' => NULL,
                'option_choice_name' => 'Poor',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'option_group_id' => 54,
                'input_type_id' => NULL,
                'option_choice_name' => 'Good',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'option_group_id' => 54,
                'input_type_id' => NULL,
                'option_choice_name' => 'Fair',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'option_group_id' => 54,
                'input_type_id' => NULL,
                'option_choice_name' => 'Poor',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'option_group_id' => 55,
                'input_type_id' => NULL,
                'option_choice_name' => 'Good',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'option_group_id' => 55,
                'input_type_id' => NULL,
                'option_choice_name' => 'Fair',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'option_group_id' => 55,
                'input_type_id' => NULL,
                'option_choice_name' => 'Poor',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'option_group_id' => 56,
                'input_type_id' => NULL,
                'option_choice_name' => 'Good',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'option_group_id' => 56,
                'input_type_id' => NULL,
                'option_choice_name' => 'Fair',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'option_group_id' => 56,
                'input_type_id' => NULL,
                'option_choice_name' => 'Poor',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'option_group_id' => 57,
                'input_type_id' => NULL,
                'option_choice_name' => 'Fast',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'option_group_id' => 57,
                'input_type_id' => NULL,
                'option_choice_name' => 'Medium',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'option_group_id' => 57,
                'input_type_id' => NULL,
                'option_choice_name' => 'Slow',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'option_group_id' => 58,
                'input_type_id' => NULL,
                'option_choice_name' => 'Good',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'option_group_id' => 58,
                'input_type_id' => NULL,
                'option_choice_name' => 'Fair',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'option_group_id' => 58,
                'input_type_id' => NULL,
                'option_choice_name' => 'Poor',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'option_group_id' => 59,
                'input_type_id' => NULL,
                'option_choice_name' => 'High',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'option_group_id' => 59,
                'input_type_id' => NULL,
                'option_choice_name' => 'Medium',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'option_group_id' => 59,
                'input_type_id' => NULL,
                'option_choice_name' => 'Low',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'option_group_id' => 60,
                'input_type_id' => NULL,
                'option_choice_name' => 'High',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'option_group_id' => 60,
                'input_type_id' => NULL,
                'option_choice_name' => 'Medium',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'option_group_id' => 60,
                'input_type_id' => NULL,
                'option_choice_name' => 'Low',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'option_group_id' => 61,
                'input_type_id' => NULL,
                'option_choice_name' => 'High',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'option_group_id' => 61,
                'input_type_id' => NULL,
                'option_choice_name' => 'Medium',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'option_group_id' => 61,
                'input_type_id' => NULL,
                'option_choice_name' => 'Low',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'option_group_id' => 62,
                'input_type_id' => NULL,
                'option_choice_name' => 'High',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'option_group_id' => 62,
                'input_type_id' => NULL,
                'option_choice_name' => 'Medium',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'option_group_id' => 62,
                'input_type_id' => NULL,
                'option_choice_name' => 'Low',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'option_group_id' => 63,
                'input_type_id' => NULL,
                'option_choice_name' => 'Close',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'option_group_id' => 63,
                'input_type_id' => NULL,
                'option_choice_name' => 'No so close',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'option_group_id' => 63,
                'input_type_id' => NULL,
                'option_choice_name' => 'Far',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'option_group_id' => 64,
                'input_type_id' => NULL,
                'option_choice_name' => 'Good',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'option_group_id' => 64,
                'input_type_id' => NULL,
                'option_choice_name' => 'Fair',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'option_group_id' => 64,
                'input_type_id' => NULL,
                'option_choice_name' => 'Poor',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'option_group_id' => 65,
                'input_type_id' => NULL,
                'option_choice_name' => 'Good',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'option_group_id' => 65,
                'input_type_id' => NULL,
                'option_choice_name' => 'Fair',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'option_group_id' => 65,
                'input_type_id' => NULL,
                'option_choice_name' => 'Poor',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'option_group_id' => 66,
                'input_type_id' => NULL,
                'option_choice_name' => 'Good',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'option_group_id' => 66,
                'input_type_id' => NULL,
                'option_choice_name' => 'Fair',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'option_group_id' => 66,
                'input_type_id' => NULL,
                'option_choice_name' => 'Poor',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'option_group_id' => 67,
                'input_type_id' => NULL,
                'option_choice_name' => '>15 cars',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'option_group_id' => 67,
                'input_type_id' => NULL,
                'option_choice_name' => '5 – 15 cars',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'option_group_id' => 67,
                'input_type_id' => NULL,
                'option_choice_name' => '< 5 cars',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'option_group_id' => 68,
                'input_type_id' => NULL,
                'option_choice_name' => '>12 hours',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'option_group_id' => 68,
                'input_type_id' => NULL,
                'option_choice_name' => '<12 hours',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'option_group_id' => 69,
                'input_type_id' => NULL,
                'option_choice_name' => 'Good',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'option_group_id' => 69,
                'input_type_id' => NULL,
                'option_choice_name' => 'Fair',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'option_group_id' => 69,
                'input_type_id' => NULL,
                'option_choice_name' => 'Poor',
                'weight' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'option_group_id' => 70,
                'input_type_id' => NULL,
                'option_choice_name' => 'Yes',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'option_group_id' => 70,
                'input_type_id' => NULL,
                'option_choice_name' => 'No',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'option_group_id' => 71,
                'input_type_id' => NULL,
                'option_choice_name' => 'Yes',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'option_group_id' => 71,
                'input_type_id' => NULL,
                'option_choice_name' => 'No',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'option_group_id' => 72,
                'input_type_id' => NULL,
                'option_choice_name' => 'Brand Strength - choice',
                'weight' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'option_group_id' => 73,
                'input_type_id' => NULL,
                'option_choice_name' => 'Yes',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'option_group_id' => 73,
                'input_type_id' => NULL,
                'option_choice_name' => 'No',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'option_group_id' => 74,
                'input_type_id' => NULL,
                'option_choice_name' => 'Yes',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'option_group_id' => 74,
                'input_type_id' => NULL,
                'option_choice_name' => 'No',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'option_group_id' => 75,
                'input_type_id' => NULL,
                'option_choice_name' => 'Yes',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'option_group_id' => 75,
                'input_type_id' => NULL,
                'option_choice_name' => 'No',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'option_group_id' => 76,
                'input_type_id' => NULL,
                'option_choice_name' => 'Yes',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'option_group_id' => 76,
                'input_type_id' => NULL,
                'option_choice_name' => 'No',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'option_group_id' => 77,
                'input_type_id' => NULL,
                'option_choice_name' => 'Yes',
                'weight' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'option_group_id' => 77,
                'input_type_id' => NULL,
                'option_choice_name' => 'No',
                'weight' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}