<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Warga</title>
</head>
<body>
	<h1>Ubah data Warga</h1>
 
	<a href="/warga"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($warga as $wrg)
	<form action="/editSaveWarga" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="NIK" value="{{ $wrg->NIK }}"> <br/>
		Nama <input type="text" name="nama" value="{{ $wrg->nama }}" required="required"> <br/>
		Alamat <textarea name="alamat" required="required">{{ $wrg->alamat }}</textarea> <br/>
		nomor Telepon <input type="number" name="nomor_telepon"  value="{{ $wrg->nomor_telepon }}" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
</body>
</html>