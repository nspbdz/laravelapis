<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data siswa</h3>

	<a href="/siswa/tambah"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($siswa as $p)
		<tr>
			<td>{{ $p->siswa_nama }}</td>
			<td>{{ $p->siswa_jabatan }}</td>
			<td>
				<a href="/siswa/edit/{{ $p->siswa_id }}">Edit</a>
				|
				<a href="/siswa/hapus/{{ $p->siswa_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>