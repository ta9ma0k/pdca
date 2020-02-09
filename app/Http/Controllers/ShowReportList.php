<?php

namespace App\Http\Controllers;

use App\infrastructure\eloquent\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ShowReportList extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return View
     */
    public function __invoke(Request $request)
    {
        $reports = Report::where('user_id', Auth::user()->id)->get();
        return view('report_list', ['reports' => $reports]);
    }
}
