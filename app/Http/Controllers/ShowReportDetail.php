<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowReportDetail extends Controller
{
    public function __invoke(string $id)
    {
        return view('report_detail');
    }

}
