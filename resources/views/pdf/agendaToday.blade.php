<html><head><style>table {border-collapse: collapse;width: 100%;} th, td {text-align: left; padding: 8px;} tr:nth-child(even){background-color: #f2f2f2} th {background-color: #4CAF50;color: white;}</style></head><body>
<h2 class="text-center"><b class="text-primary">Buku Tamu Pemko Banjarmasin</b></h2>
<h4>Report PDF Buku Tamu : {{$hariIni}}</h4>
        <table class="table1" >
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Dari</th>
                <th>Keperluan</th>
                <th>Telp</th>
            </tr>
            <?php
                    $no = 1;
                    ?>
                      @foreach ($data as $dt)
                        <tr>
                        <td>{{$no++}}</td>
                        <td>{{$dt->nama_tamu}}</td>
                        <td>{{$dt->jumlah_tamu}}</td>
                        <td>{{Carbon\Carbon::parse($dt->tanggal)->format('d-M-Y')}}</td>
                        <td>{{$dt->jam}}</td>
                        <td>{{$dt->instansi}}</td>
                        <td>{{$dt->keperluan}}</td>
                        <td>{{$dt->telp}}</td>
                        </tr>
                      @endforeach
        </table>	
</body></html>