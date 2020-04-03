<?php namespace App\Customs\Chart;

class ChartjsDataset extends \ConsoleTVs\Charts\Classes\Chartjs\Dataset{
    protected $payload = [];

    /**
     * Creates a new dataset with the given values.
     *
     * @param string $name
     * @param string $type
     * @param array  $values
     * @param array  $payload
     */
    public function __construct(string $name, string $type, array $values, array $payload=[])
    {
        $this->payload = $payload;

        parent::__construct($name, $type, $values);

        $this->options([
            'borderWidth' => 2,
        ]);
    }

    /**
     * Formats the dataset for chartjs.
     *
     * @return array
     */
    public function format()
    {
        return array_merge($this->options, [
            'data'  => $this->values,
            'label' => $this->name,
            'type'  => $this->type,
            'payload'  => $this->payload,
        ]);
    }

    /**
     * Add payload
     *
     * @param array $payload
     * @return $this
     */
    public function payload(array $payload){
        $this->payload = $payload;
        return $this;
    }
}