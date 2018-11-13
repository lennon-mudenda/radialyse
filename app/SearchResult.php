<?php

namespace App;


class SearchResult
{
    private $results = array();
    private $medicalTest;

    public function __construct(MedicalTest $medicalTest)
    {
        $this->medicalTest = $medicalTest;

    }

    /**
     * @return array
     */
    public function getResults(): array
    {

        return $this->results;
    }

    private function buildResultSet()
    {
        foreach ($this->medicalTest->prices as $price)
        {
            $this->results[] = array(
                "id"                =>      $price->id,
                "center_name"       =>      $price->center->name,
                "center_lat"        =>      $price->center->lat,
                "center_long"       =>      $price->center->long,
                "center_address"    =>      $price->center->address
            );
        }
    }
}
