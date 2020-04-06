<?php

namespace App\Exports;

use App\Exports\Sheets\StationCriteriaDetialSheet;
use App\Exports\Sheets\StationCriteriaSheet;
use App\Models\Station;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Excel;

class SurveyAnalysisExport implements WithMultipleSheets, Responsable
{
    use Exportable;

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;

        $this->fileName = "Stations Criteria Report.xlsx";

        if($station_id = (int) request('station_id')){
            $station = Station::find($station_id);
            $this->fileName = "$station->name Criteria Report.xlsx";
        }
    }

    /**
     * Optional Writer Type
     */
    private $writerType = Excel::XLSX;

    /**
     * @return array
     */
    public function sheets(): array
    {
        $sheets = [];

        //go through each sections
        foreach($this->data['sections'] as $station_name => $sections)
        {
            $section_payloads = $this->data['section_payloads'];

            //criteria sheet for station
            $sheets[] = new StationCriteriaSheet($station_name, $sections);

            //criteria detail sheet for station
            $sheets[] = new StationCriteriaDetialSheet($station_name, $section_payloads[$station_name]);
        }

        return $sheets;
    }
}