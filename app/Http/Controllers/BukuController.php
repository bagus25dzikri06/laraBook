<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index() 
    {
        //select * from book_data
        $book_data = DB::table('book_data')->get();
        return view('index', ['book_data' => $book_data]);
    }

    public function add() 
    {
        return view('add');
    }

    public function store(Request $request)
    {
        // insert into pegawai ('judul_buku','nama_pengarang','tahun_terbit','penerbit') values ('title','author','year','publisher')
        DB::table('book_data')->insert([
            'judul_buku' => $request->title,
            'nama_pengarang' => $request->author,
            'tahun_terbit' => $request->year,
            'penerbit' => $request->publisher
        ]);
        return redirect('/buku');
    }

    //update from book_data set ... where id_buku = ...
    public function edit($id) 
    {
        $book_data = DB::table('book_data')->where('id_buku',$id)->get();
        return view('edit', ['book_data' => $book_data]);
    }

    public function update(Request $request)
    {
        DB::table('book_data')->where('id_buku', $request->id)->update([
            'judul_buku' => $request->title,
            'nama_pengarang' => $request->author,
            'tahun_terbit' => $request->year,
            'penerbit' => $request->publisher
        ]);
        return redirect('/buku');
    }

    public function delete($id) 
    {
        //delete from book_data where id_buku = ...
        $book_data = DB::table('book_data')->where('id_buku',$id)->delete();
        return redirect('/buku');
    }

}
