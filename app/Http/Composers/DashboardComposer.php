<?php namespace App\Http\Composers;
use Illuminate\View\View;
use Digitlimit\Sms\SmsManager;
use App\Helpers\Chart;
use App\Helpers\Chartjs;

class DashboardComposer {

    protected $top = 5;

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
//        $bar = Chartjs::bar();
//        $view->with('total', $bar['total'])
//            ->with('sections', $bar['sections']);
    }
}