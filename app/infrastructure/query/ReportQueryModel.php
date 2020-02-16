<?php


namespace App\infrastructure\query;


use Carbon\Carbon;

class ReportQueryModel
{
    /** @var string */
    private $id;
    /** @var Carbon */
    private $date;

    public function __construct(string $id, Carbon $date)
    {
        $this->id = $id;
        $this->date = $date;
    }

    public function formatDate() {
        return $this->date->format('Y/m/d');
    }

    public function id() { return $this->id; }

}