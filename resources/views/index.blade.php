<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel</title>
</head>
<body>
	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
		</tr>
        @foreach ($pegawai as $peg)
        <tr>
        <td>{{$peg->nama}}</td>
        <td>{{$peg->alamat}}</td>
        <td><a href="/pegawai/edit/{{$peg->id}}">Edit</a> | <a href="/pegawai/hapus/{{$peg->id}}">Hapus</a> </td>
        </tr>
        @endforeach
	</table>


</body>
</html>
