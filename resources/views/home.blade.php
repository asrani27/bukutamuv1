@extends('layouts.back.master')

@section('content')

      <div class="box box-primary">
          <div class="box-header">
                  <h3 class="box-title">Cari Data</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th class="text-center">Foto</th>
                      <th>Nama</th>
                      <th>Tanggal</th>
                      <th>Jam</th>
                      <th>Dari</th>
                      <th>Keperluan</th>
                      <th>Telp</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <?php
                    $no = 1;
                    ?>
                    <tbody>
                      @foreach ($data as $dt)
                        <tr>
                        <td width="10px">{{$no++}}</td>
                        <td class="text-center">
                          @if($dt->namafoto == null)
                            Tidak Ada
                          @else
                          <a href={{url("/storage/{$dt->namafoto}")}} target="_blank">
                            <img src={{url("/storage/{$dt->namafoto}")}} width='50px'>
                          </a>
                          @endif
                        </td>
                        <td>{{$dt->nama_tamu}}</td>
                        <td>{{Carbon\Carbon::parse($dt->tanggal)->format('d-M-Y')}}</td>
                        <td>{{$dt->jam}}</td>
                        <td>{{$dt->instansi}}</td>
                        <td>{{$dt->keperluan}}</td>
                        <td>{{$dt->telp}}</td>
                        <td>
                            <a href={{url("/home/edit/{$dt->id}")}} class="btn btn-xs btn-success"><i class="fa fa-edit"></i> </a>
                            <a href={{url("/home/delete/{$dt->id}")}} class="btn btn-xs btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data Ini..?');"><i class="fa fa-trash"></i> </a>
                        </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
  </div>
@endsection
