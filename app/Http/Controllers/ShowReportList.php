<?php

namespace App\Http\Controllers;

use App\infrastructure\query\ReportListQueryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ShowReportList extends Controller
{

    /** @var ReportListQueryService */
    private $reportListQueryService;

    public function __construct(ReportListQueryService $reportQueryService)
    {
        $this->reportListQueryService = $reportQueryService;
    }

    /**
     * Handle the incoming request.
     *
     * @return View
     */
    public function __invoke()
    {
        $reports = $this->reportListQueryService->findByUserId(Auth::user()->id);
        return view('report_list', ['reports' => $reports]);
    }
}
