<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Warga</title>
</head>
<body>
    <h2>Dashboard</a></h2>
	<h3>Data mahasiswa</h3>
 
	<a href="/warga"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/addSaveWarga" method="post">
		{{ csrf_field() }}
        NIK <input type="text" name="NIK" required="required"> <br/>
		Nama <input type="text" name="nama" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
        No Telepon <input type="text" name="nomor_telepon" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
</body>
</html>