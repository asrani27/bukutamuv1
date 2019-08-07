<?php

namespace App\Exports;

use App\Agenda;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class AgendaExport implements FromView
{
    // use Exportable;

    // public function query()
    // {
    //     return Agenda::selectRaw('year(created_at) year, monthname(created_at) month, count(*) data')
    //     ->groupBy('year', 'month')
    //     ->orderBy('year', 'desc')
    //     ->get();
    // }

    public function view(): View
    {
        $dat = Agenda::all();
        $data = $dat->map(function($item){
            $day = Carbon::parse($item->created_at)->format('D');
            if($day == 'Sun')
            {
                $hari = 'Minggu';
            }
            elseif($day == 'Mon')
            {
                $hari = 'Senin';
            }
            elseif($day == 'Tue')
            {
                $hari = 'Selasa';
            }
            elseif($day == 'Wed')
            {
                $hari = 'Rabu';
            }
            elseif($day == 'Thu')
            {
                $hari = 'Kamis';
            }
            elseif($day == 'Fri')
            {
                $hari = 'Jumat';
            }
            elseif($day == 'Sat')
            {
                $hari = 'Sabtu';
            }
            $item->nama_hari = $hari;
            return $item;
        });
        return view('excel.agenda',compact('data'));
    }
}
