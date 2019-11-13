<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraBookDB</title>
</head>
<body>
	<h3>Edit Buku</h3>
 
	<a href="/buku">Back</a>
	
	<br/>
	<br/>
 
    @foreach($book_data as $dbook)
	<form action="/buku/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $dbook->id_buku }}"> <br/>
		Judul: <input type="text" name="title" value="{{ $dbook->judul_buku }}"> <br/>
		Pengarang: <input type="text" name="author" value="{{ $dbook->nama_pengarang }}"> <br/>
		Tahun Terbit: <input type="number" name="year" value="{{ $dbook->tahun_terbit }}"> <br/>
		Penerbit: <input type="text" name="publisher" value="{{ $dbook->penerbit }}"> <br/>
		<input type="submit" value="Save">
	</form>
    @endforeach
</body>
</html>