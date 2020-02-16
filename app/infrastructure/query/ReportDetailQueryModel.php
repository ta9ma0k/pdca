<?php


namespace App\infrastructure\query;


use Carbon\Carbon;

class ReportDetailQueryModel
{
    /** @var string */
    private $id;
    /** @var Carbon */
    private $date;
    /** @var string */
    private $goal;
    /** @var string */
    private $goodPoint;
    /** @var string */
    private $badPoint;
    /** @var string */
    private $action;
    /** @var TaskQueryModel[] */
    private $tasks;

    public function __construct(string $id,Carbon $date,string $goal,string $goodPoint,string $badPoint,string $action,array $tasks)
    {
        $this->id = $id;
        $this->date = $date;
        $this->goal = $goal;
        $this->goodPoint = $goodPoint;
        $this->badPoint = $badPoint;
        $this->action = $action;
        $this->tasks = $tasks;
    }

}