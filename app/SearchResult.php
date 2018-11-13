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

    }
}
