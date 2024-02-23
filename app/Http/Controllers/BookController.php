<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    public function index(){
        return view('bubuku.dashboard'); 
    }

    public function tablte () {
        $show = Book::all();
        return view ('bubuku.table_book', compact('show'));
    }

    public function createbuk (){
        return view ('bubuku.addbook');
    }

    //untuk proses penambahan data
    public function add (Request $request){
        $show = new Book;
        $show -> gambar = $request -> input ('gambar');
        $show -> judul = $request -> input ('judul');
        $show -> penulis = $request -> input ('penulis');
        $show -> penerbit = $request -> input ('penerbit');
        $show -> tahun_penerbit = $request -> input ('thn');

        $show -> save();
        return redirect ('/buku');
    }

    public function edit($id)
    {
        $show = Book::find($id);
        return view('bubuku.update', compact('show'));
    }

    //untuk proses update
    public function update(Request $request,$id)
    {
        $show = Book::find($id);
        $show->gambar = $request->input('gambar');
        $show->judul = $request->input('judul');
        $show->penulis = $request->input('penulis');
        $show->penerbit = $request->input('penerbit');
        $show->tahun_penerbit = $request->input('thn');

        $show->save();
        return redirect('/buku');
    }

    public function delete($id ){
        $show = Book::find($id);
        $show -> delete();

        return redirect('/buku');
    }
}
