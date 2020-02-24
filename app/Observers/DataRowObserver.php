<?php

namespace App\Observers;

use App\Models\DataRow;

class DataRowObserver
{
    /**
     * Handle the data row "created" event.
     *
     * @param  \App\Models\DataRow  $dataRow
     * @return void
     */
    public function saving(DataRow $dataRow)
    {
        //add attribute to hide field in form or hide field in table
        $details = $dataRow->details ? json_decode(json_encode($dataRow->details), true) : [];
        $details['hide_in_form'] = false;
        $details['hide_in_table'] = false;

        if(request()->has("field_hide_in_form_{$dataRow->field}")){
            $details['hide_in_form'] = true;
        }

        if(request()->has("field_hide_in_table_{$dataRow->field}")){
            $details['hide_in_table'] = true;
        }

        $dataRow->details = $details;
    }

    /**
     * Handle the data row "created" event.
     *
     * @param  \App\Models\DataRow  $dataRow
     * @return void
     */
    public function created(DataRow $dataRow)
    {
        //
    }

    /**
     * Handle the data row "updated" event.
     *
     * @param  \App\Models\DataRow  $dataRow
     * @return void
     */
    public function updated(DataRow $dataRow)
    {
        //
    }

    /**
     * Handle the data row "deleted" event.
     *
     * @param  \App\Models\DataRow  $dataRow
     * @return void
     */
    public function deleted(DataRow $dataRow)
    {
        //
    }

    /**
     * Handle the data row "restored" event.
     *
     * @param  \App\Models\DataRow  $dataRow
     * @return void
     */
    public function restored(DataRow $dataRow)
    {
        //
    }

    /**
     * Handle the data row "force deleted" event.
     *
     * @param  \App\Models\DataRow  $dataRow
     * @return void
     */
    public function forceDeleted(DataRow $dataRow)
    {
        //
    }
}
