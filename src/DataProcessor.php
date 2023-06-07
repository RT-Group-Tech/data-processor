<?php


class DataProcessor
{
    private array $dataSet;

    public function __construct(array $dataSet)
    {
        $this->dataSet=$dataSet;
    }

    /**
     * Method pour groupper les données par key.
     * @param $key
     */
    public function groupBy($key)
    {
        $keyData=[];

        for($i=0; $i<count($this->dataSet); $i++)
        {
            //if($this->)
        }

    }
}