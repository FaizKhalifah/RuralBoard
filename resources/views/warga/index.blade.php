<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Warga</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
            <td>{{ $wrg->nik }}</td>
			<td>{{ $wrg->nama }}</td>
			<td>{{ $wrg->alamat }}</td>
			<td>{{ $wrg->no_telpon }}</td>
			<td>
				<a href="/editWarga/{{ $wrg->nik }}">Edit</a>
				|
				<a href="/deleteWarga/{{$wrg->nik}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
</body>
</html>