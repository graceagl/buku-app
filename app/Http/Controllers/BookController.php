<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class BookController extends Controller
{
    public function index(){
        return view('bubuku.dashboard'); 
    }

    //menamilkan data buku
    public function tablte () {
        $show = Book::all();
        return view ('bubuku.table_book', compact('show'));
    }

    //menamilkan form add buku
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


    //menamilkan data
    public function user()
    {
        $user = User::all();
        return view('bubuku.datau', compact('user'));
    }

    public function petugas()
    {
        $petugas = User::all();
        return view('bubuku.datapetugas', compact('petugas'));
    }

    public function addpetugas()
    {
        // $petugas = User::all();
        return view('bubuku.addpetugas');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function create(Request $request)
    {
            $petugas = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => $request['role'],
        ]);

        return redirect('/bubuku.datapetugas');
    }


    public function kolek()
    {
        return view('bubuku.catalog');
    }

    public function jelax()
    {
        return view('bubuku.detail');
    }

    public function bio()
    {
        return view('bubuku.profil');
    }
}


