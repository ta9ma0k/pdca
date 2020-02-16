<?php


namespace App\infrastructure\query;


use Carbon\Carbon;

class TaskQueryModel
{
    /** @var string */
    private $id;
    /** @var Carbon */
    private $startTime;
    /** @var Carbon */
    private $endTime;
    /** @var string */
    private $detail;
    /** @var string */
    private $result;

    public function __construct(string $id, Carbon $startTime, Carbon $endTime, string $detail, string $result)
    {
        $this->id = $id;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->detail = $detail;
        $this->result = $result;
    }
}