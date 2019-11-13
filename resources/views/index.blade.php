<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraBookDB</title>
</head>
<body>
    <h2>LaraBook Book Stores</h2>
	<h3>Data Buku</h3>
 
	<a href="/buku/add"> + Add New Book</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Judul</th>
			<th>Pengarang</th>
			<th>Tahun Terbit</th>
			<th>Penerbit</th>
			<th>Opsi</th>
		</tr>
		@foreach($book_data as $dbook)
		<tr>
			<td>{{ $dbook->judul_buku }}</td>
			<td>{{ $dbook->nama_pengarang }}</td>
			<td>{{ $dbook->tahun_terbit }}</td>
			<td>{{ $dbook->penerbit }}</td>
			<td>
				<a href="/buku/edit/{{ $dbook->id_buku }}">Edit</a>
				|
				<a href="/buku/delete/{{ $dbook->id_buku }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>