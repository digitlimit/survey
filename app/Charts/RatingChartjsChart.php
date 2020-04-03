<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;
//use ConsoleTVs\Charts\Classes\C3\Chart;
use App\Customs\Chart\ChartjsDataset as Dataset;

class RatingChartjsChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Chartjs dataset class.
     *
     * @var object
     */
    public $dataset = Dataset::class;
}
