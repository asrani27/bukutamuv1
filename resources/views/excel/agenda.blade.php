<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<style type="text/css">
.auto-style1 {
	font-family: Arial, Helvetica, sans-serif;
	text-align: center;
}
.auto-style2 {
	border-left-width: 0px;
	border-right-width: 0px;
	border-top-width: 0px;
}
.auto-style3 {
	border-top-style: solid;
	border-top-width: 1px;
}
.auto-style4 {
	border-style: solid;
	border-width: 1px;
}
</style>
</head>

<body>

<table class="auto-style2" style="width: 100%">
	<tr>
		<td class="auto-style1" colspan="8" style="height: 13px"><strong>
		REKAPITULASI PEMAKAIAN KE BANJARMASIN PLAZA SMART CITY</strong></td>
	</tr>
	<tr>
		<td class="auto-style1" colspan="8"><strong>BULAN : JULI 2019</strong></td>
	</tr>
	<tr>
		<td class="auto-style4"><strong>No</strong></td>
		<td class="auto-style4"><strong>Hari / Tanggal</strong></td>
		<td class="auto-style4"><strong>Nama Komunitas</strong></td>
		<td class="auto-style4"><strong>Perorangan</strong></td>
		<td class="auto-style4"><strong>Jumlah(Org)</strong></td>
		<td class="auto-style4"><strong>Kegiatan(Keperluan)</strong></td>
		<td class="auto-style4"><strong>Lama Pemakaian (Jam)</strong></td>
		<td class="auto-style4"><strong>Saran-Saran</strong></td>
    </tr>
    
    <?php
    $no = 1;
    ?>
    @foreach ($data as $d)
    <tr>
        <td class="auto-style4">{{$no++}}</td>
        <td class="auto-style4">{{$d->nama_hari}} / {{\Carbon\Carbon::parse($d->tanggal)->format('d M Y')}}</td>
        <td class="auto-style4">{{$d->nama_komunitas}}</td>
        <td class="auto-style4">{{$d->nama_tamu}}</td>
        <td class="auto-style4">{{$d->jumlah_tamu}}</td>
        <td class="auto-style4">{{$d->keperluan}}</td>
        <td class="auto-style4"></td>
        <td class="auto-style4"></td>
    </tr>    
    @endforeach
    
	<tr>
		<td class="auto-style3">&nbsp;</td>
		<td class="auto-style3">&nbsp;</td>
		<td class="auto-style3">&nbsp;</td>
		<td class="auto-style3">&nbsp;</td>
		<td class="auto-style3">&nbsp;</td>
		<td class="auto-style3">&nbsp;</td>
		<td class="auto-style3">&nbsp;</td>
		<td class="auto-style3">&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td colspan="3">Banjarmasin, {{\Carbon\Carbon::today()->format('d M Y')}}</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td colspan="3">Pengelola Banjarmasin Plaza Smart City</td>
	</tr>
</table>

</body>

</html>
