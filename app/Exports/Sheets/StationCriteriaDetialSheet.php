<?php

namespace App\Exports\Sheets;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;

class StationCriteriaDetialSheet implements FromCollection, WithTitle, WithHeadings, ShouldAutoSize
{
    protected $station_name;
    protected $payload;

    public function __construct($station_name, $payload)
    {
        $this->station_name = $station_name;
        $this->payload = $payload;
    }

    public function headings(): array
    {
        return [
            'Criteria',
            'Question',
            'Answer',
            'Answer Weight',
        ];
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $survey = [];
        $section_names = [];

        foreach($this->payload as $sections)
        {
            $section_name = $sections[0]['section_name'];
            $section_weight = $sections[0]['section_weight'];

            //go through each sections
            foreach($sections as $section)
            {
                $criteria = '';

                //we are using this to track section name already added in table
                if(!in_array($section_name, $section_names)){
                    $section_names[] = $section_name;
                    $criteria = "{$section_name} ({$section_weight})";
                }

                $survey[] = [
                    'Criteria' => $criteria,
                    'Question' => $section['question'],
                    'Answer' => $section['answer'],
                    'Answer Weight' => $section['answer_weight'],
                ];
            }

        }

        return collect($survey);
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return "{$this->station_name} Criteria Detail";
    }
}