<?php

namespace App\Http\Controllers;

use App\infrastructure\query\ReportQueryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ShowReportList extends Controller
{

    /** @var ReportQueryService */
    private $reportQueryService;

    public function __construct(ReportQueryService $reportQueryService)
    {
        $this->reportQueryService = $reportQueryService;
    }

    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return View
     */
    public function __invoke(Request $request)
    {
        $reports = $this->reportQueryService->findByUserId(Auth::user()->id);
        return view('report_list', ['reports' => $reports]);
    }
}
