<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use App\Customs\Chartjs\Dataset;

class Rating extends Chart
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
