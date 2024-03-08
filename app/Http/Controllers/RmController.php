<?php

namespace App\Http\Controllers;

use App\Models\Rm;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RmController extends Controller
{
    public function welcome(Request $request): View
    {
        $rm = $request->query('rm');
        return view('welcome')->with('rm', $rm);
    }
    public function print_pdf(Request $request)
    {
        $query = $request->query('rm');
        // // Store Procedure Call
        // $data = Rm::someFUnctionName($query);
        // // dump data
        // dd($data);
        $args = [
            'rm'    => $query,
       ];
        $customPaper = array(0, 0, 684, 820);
        $pdf = Pdf::loadview('welcome', $args)->setPaper($customPaper);
        return $pdf->stream();
    }
}
