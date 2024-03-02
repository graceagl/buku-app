<?php

namespace App\Http\Controllers;

use App\Models\simpan;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class BookController extends Controller
{
    public function index()
    {
        return view('bubuku.dashboard');
    }

    //menamilkan data buku
    public function tablte()
    {
        $show = Book::all();
        return view('bubuku.table_book', compact('show'));
    }

    //menamilkan form add buku
    public function createbuk()
    {
        return view('bubuku.addbook');
    }



    //untuk proses penambahan data
    public function add(Request $request)
    {
        $show = new Book;
        $show->gambar = $request->input('gambar');
        $show->judul = $request->input('judul');
        $show->penulis = $request->input('penulis');
        $show->penerbit = $request->input('penerbit');
        $show->tahun_penerbit = $request->input('thn');
        $show->dec = $request->input('dec');
        $show->save();
        return redirect('/buku');
    }

 
    


    //untuk proses update
    public function update(Request $request, $id)
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


    public function renew(Request $request, $id)
    {
       $editp = User::find($id)->update([
        'name'=> $request['name'],
        'username'=> $request['username'],
        'alamat'=> $request['alamat'],
        'email'=> $request['email'],

       ]);

    //    $editp->save();
       return redirect('/profil/{id}');
    }




    public function delete($id)
    {
        $show = Book::find($id);
        $show->delete();

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
        $petugas = new User([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => $request['role'],
        ]);

        $petugas->save();

        return redirect()->route('datap');
    }


    public function kolek()
    {
        $buku = Book::all();
        return view('bubuku.catalog', compact('buku'));
    }

    public function jelax($id)
    {
        $b = Book::find($id);
        return view('bubuku.detail', compact('b'));
    }

    public function bio()
    {
        return view('bubuku.profil');
    }

    public function koleku()
    {
        $buku = Book::all();
        return view('bubuku.koleku', compact('buku'));
    }

    public function editp($id)
    {   
        $c = User::find($id);
        return view('bubuku.editprofil');
    }



    public function store($id){
        $book = Book::find($id);
        
        $user = auth()->user();

        $existingBookmark = simpan::where('book_id', $book->id)
            ->where('user_id', $user->id)
            ->first();

        if ($existingBookmark) {
            $existingBookmark->delete();
            return back();
        } else {
            $bookmark = new simpan();
            $bookmark->book_id = $book->id;
            $bookmark->user_id = $user->id;
            $bookmark->save();

            return back();
        }
    }


}
