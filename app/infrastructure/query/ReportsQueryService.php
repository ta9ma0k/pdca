<?php


namespace App\infrastructure\query;


use App\infrastructure\eloquent\Report;

class ReportsQueryService
{
    /**
     * @var Report
     */
    private $report;

    public function __construct(Report $report)
    {
        $this->report = $report;
    }

    public function findByUserId(Integer $user_id) {

    }


}