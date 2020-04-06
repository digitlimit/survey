<?php

namespace App\Exports\Sheets;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithTitle;

class StationCriteriaSheet implements FromCollection, WithTitle, WithHeadings, ShouldAutoSize
{
    protected $station_name;
    protected $sections;

    public function __construct($station_name, $sections)
    {
        $this->station_name = $station_name;
        $this->sections = $sections;
    }

    public function headings(): array
    {
        return [
            'Criteria',
            'Score',
        ];
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $criteria = [];

        foreach($this->sections as $section)
        {
            $criteria[] = [
                'Criteria' => $section[0],
                'Score' => $section[1],
            ];
        }

        return collect($criteria);
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return "{$this->station_name} Criteria";
    }
}