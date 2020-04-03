<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\C3\Chart;
use App\Customs\Chart\C3Dataset as Dataset;

class RatingC3Chart extends Chart
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
