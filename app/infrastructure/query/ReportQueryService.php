<?php


namespace App\infrastructure\query;


use App\infrastructure\eloquent\Report;
use Carbon\Carbon;

class ReportQueryService
{
    /** @var Report */
    private $reportEloquent;

    public function __construct(Report $reportEloquent)
    {
        $this->reportEloquent = $reportEloquent;
    }

    /**
     * @param int $user_id
     * @return ReportQueryModel[]
     */
    public function findByUserId(int $user_id): array
    {
        return $this->reportEloquent::where('user_id', $user_id)
            ->get()
            ->map(function ($result) {
                return new ReportQueryModel($result['id'], new Carbon($result['date']));
            })
            ->toArray();
    }

}