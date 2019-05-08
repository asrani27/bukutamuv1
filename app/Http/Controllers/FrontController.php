<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agenda;
use Carbon\Carbon;
use Alert;

class FrontController extends Controller
{
    public function index()
    {
        $data = Agenda::orderBy('id','desc')->get();
        return view('agenda',compact('data'));
    }

    public function store(Request $req)
    {
        $tanggal = Carbon::parse($req->tanggal)->format('Y-m-d');
        if(!empty($_POST['namafoto'])){
            $encoded_data = $_POST['namafoto'];
              $binary_data = base64_decode( $encoded_data );
              
              // save to server (beware of permissions // set ke 775 atau 777)
              $namafoto = uniqid().".png";
              $result = file_put_contents( 'storage/'.$namafoto, $binary_data );
              if (!$result) die("Could not save image!  Check file permissions.");
          }

        $s = new Agenda;
        $s->nama_tamu   = $req->nama_tamu;
        $s->jumlah_tamu = $req->jumlah_tamu;
        $s->tanggal     = $tanggal;
        $s->jam         = $req->jam;
        $s->instansi    = $req->instansi;
        $s->telp        = $req->telp;
        $s->keperluan   = $req->keperluan;
        $s->namafoto    = $namafoto;
        $s->save();
        
        Alert::success('Berhasil Dikirim', 'Terima Kasih');
        return back();
    }
}
