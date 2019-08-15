<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;
use App\Exports\UsersExport;
use App\Exports\AgendaExport;
use App\Exports\AgendaBulanExport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class ExcelController extends Controller
{
    public function index()
    {
        $result = Agenda::selectRaw('year(created_at) year, monthname(created_at) month, count(*) data')
        ->groupBy('year', 'month')
        ->orderBy('year', 'desc')
        ->orderBy('month','desc')
        ->get();
        //dd($result);
        return view('excel.index',compact('result'));
    }

    public function exportFile(){
        $export = new AgendaExport;
        return Excel::download($export, 'report.xlsx');
        //return Excel::download(new UsersExport, 'users.xlsx');
    }  

    public function exportFileBulan(Request $req){
        //dd($req->all());
        $carbon = Carbon::createFromFormat('M/Y',$req->bulantahun);
        $year = $carbon->year;
        $month = $carbon->month;
        $data = Agenda::whereYear('created_at', '=', $year)->whereMonth('created_at', '=', $month)->get();
        
        return Excel::download(new AgendaBulanExport($data), 'reportbulan.xlsx');
    }  
}
