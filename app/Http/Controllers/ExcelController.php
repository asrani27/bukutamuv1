<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;
use App\Exports\UsersExport;
use App\Exports\AgendaExport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class ExcelController extends Controller
{
    public function index()
    {
        $result = Agenda::selectRaw('year(created_at) year, monthname(created_at) month, count(*) data')
        ->groupBy('year', 'month')
        ->orderBy('year', 'desc')
        ->get();
        return view('excel.index',compact('result'));
    }

    public function exportFile(){
        $export = new AgendaExport;
        return Excel::download($export, 'agenda.xlsx');
        //return Excel::download(new UsersExport, 'users.xlsx');
    }  
}
