<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Warga</title>
</head>
<body>
    <h1>Data Warga</h1>
	<a href="/addWarga">Tambah data warga</a>
	<br>
	<br>
    <table border="1" class="table table-bordered">
		<tr>
            <th>NIK</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No Telepon</th>
            <th>Aksi</th>
		</tr>
		@foreach($warga as $wrg)
		<tr>
            <td>{{ $wrg->NIK }}</td>
			<td>{{ $wrg->nama }}</td>
			<td>{{ $wrg->alamat }}</td>
			<td>{{ $wrg->nomor_telepon }}</td>
			<td>
				<a href="/editWarga/{{ $wrg->NIK }}">Edit</a>
				|
				<a href="/deleteWarga/{{$wrg->NIK}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
</body>
</html>