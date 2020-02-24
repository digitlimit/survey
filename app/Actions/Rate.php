<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class Rate extends AbstractAction
{
    public function getTitle()
    {
        return 'Rate';
    }

    public function getIcon()
    {
        return 'voyager-eye';
    }

    public function getPolicy()
    {
        return 'rate';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-success pull-right',
        ];
    }

    public function getDefaultRoute()
    {
        return route('voyager.stations.rate', ['id' => $this->data->id]);
    }
}