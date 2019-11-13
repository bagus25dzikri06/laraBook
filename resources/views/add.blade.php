<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraBookDB</title>
</head>
<body>
	<h3>Tambah Buku</h3>
 
	<a href="/buku">Back</a>
	
	<br/>
	<br/>
 
	<form action="/buku/store" method="post">
		{{ csrf_field() }}
		Judul: <input type="text" name="title" required="required"> <br/>
		Pengarang: <input type="text" name="author" required="required"> <br/>
		Tahun Terbit: <input type="number" name="year" required="required"> <br/>
		Penerbit: <input type="text" name="publisher" required="required"><br/>
		<input type="submit" value="Save">
	</form>
</body>
</html>