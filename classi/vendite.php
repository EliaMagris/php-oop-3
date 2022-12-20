<?php

include_once __DIR__ . '/../traits/workers.php';

class EmployerOfYear
{
    public $name;
    public $eta;


    use News;

    public function __construct(
        String $name,
        Int $eta

    ) {
        $this->name = $name;
        $this->eta = $eta;
    }
}