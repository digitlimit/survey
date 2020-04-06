<?php namespace App\Helpers;

use App\Charts\RatingChartjsChart;
use App\Models\StationSurveyAnswer;
use App\Helpers\Color;

class Chart
{
    public static function query()
    {
        //params
        $q = request('q');
        $station_id = (int) request('station_id');

        $query = StationSurveyAnswer::query()
            ->join('stations AS s', 'station_survey_answers.station_id', '=', 's.id')
            ->join('survey_headers AS sh', 'station_survey_answers.survey_header_id', '=', 'sh.id')
            ->join('users AS u', 'station_survey_answers.user_id', '=', 'u.id')
            ->join('roles AS r', 'u.role_id', '=', 'r.id')
            ->join('option_choices AS oc', 'station_survey_answers.option_choice_id', '=', 'oc.id')
            ->join('questions AS q', 'station_survey_answers.question_id', '=', 'q.id')
            ->join('survey_sections AS ss', 'q.survey_section_id', '=', 'ss.id')
            ->join('countries AS c', 's.country_id', '=', 'c.id')
            ->join('states AS st', 's.country_id', '=', 'st.id')
            ->selectRaw("
                s.id AS station_id, s.name AS station_name, s.address AS station_address,
                s.email AS station_email, s.phone AS station_phone, st.name As station_state, c.name AS station_country,
                
                sh.id AS survey_header_id, sh.survey_name AS survey_name, sh.instructions AS survey_instructions,
                
                u.name AS user_name, u.email AS user_email, r.name AS user_role,
                
                oc.option_choice_name AS answer, oc.weight AS answer_weight, 
               
                ss.section_name, ss.section_title, ss.survey_section_id, ss.weight AS section_weight,
                
                q.question_name AS question
            ");

        if($q){
            $query = $query->where('s.name', 'like', "%{$q}%")
                ->orWhere('s.address', 'like', "%{$q}%")
                ->orWhere('st.name', 'like', "%{$q}%")
                ->orWhere('u.name', 'like', "%{$q}%");
        }

        if($station_id){
            $query = $query->where('s.id', $station_id);
        }

        return $query;
    }

    public static function data()
    {
        $stations = self::query()
            ->get()
            ->groupBy('station_id');

        if(count($stations)){

            //we store stations criteria data for generating sections
            //that's why we call it section
            $sections = [];
            $section_payloads = [];
            $station_totals = [];
            $station_total_payloads = [];

            foreach($stations as $answers)
            {
                //station name
                $station_name = $answers[0]->station_name;

                //section weights
                $section_weights = [];

                foreach($answers->groupBy('section_name') as $section_name => $ans)
                {
                    //section weight for this answer section
                    $section_weight = $ans[0]->section_weight;
                    $total_weight = $ans->sum('answer_weight') + $section_weight;
                    $payload = $ans->toArray();

                    $sections[$station_name][] = ["$section_name", $total_weight];

                    //TODO document with samples
                    $section_payloads[$station_name][$section_name] = $payload; //add payload here

                    $section_weights[] = $section_weight;
                }

                $station_payload = $answers->toArray();
                $station_total_weight = $answers->sum('answer_weight') + array_sum($section_weights);
                $station_total_payloads[$station_name] = $station_payload;
                $station_totals[] = ["$station_name", $station_total_weight];
            }
        }

        return compact('station_totals', 'sections', 'section_payloads', 'station_total_payloads');
    }
}