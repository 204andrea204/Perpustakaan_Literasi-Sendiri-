<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Kategori;
use Auth;

class ArtikelController extends Controller
{
    public function index()
   	{
        $d['artikels'] = Artikel::where('user_id', Auth::user()->id);
   		return view("user.artikel.index", $d);
    }
    
    public function add()
   	{	
   		$kategori = Kategori::all();
   		return view('user.artikel.add', compact('kategori'));
    }
       
    public function tambah(Request $r){
        $artikel = new Artikel;
        $artikel->kategori_id = $r->kategori_id;
        $artikel->judul = $r->judul;
        $artikel->pembuat = $r->pembuat;
        $artikel->deskripsi = $r->deskripsi;
        $artikel->isi = $r->isi;
        $artikel->user_id = Auth::user()->id;

        if ($r->hasFile('gambar')) {
            $file1 = $r->file('gambar');
            $filename1 = $file1->getClientOriginalName();
            $r->file('gambar')->move('gambarArtikel/', $filename1);
            $artikel->gambar = $filename1;
        }

        $artikel->save();
        return redirect('/artikel');
    }

    public function edit($id){
        $d['artikels'] = Artikel::find($id);
        $d['kategoris'] = Kategori::all();
        return view('user.artikel.edit', $d);
    }


    public function update(Request $r){
        $artikel = Artikel::find($r->id);
        $artikel->kategori_id = $r->kategori_id;
        $artikel->judul = $r->judul;
        $artikel->pembuat = $r->pembuat;
        $artikel->deskripsi = $r->deskripsi;
        $artikel->isi = $r->isi;


        if($r->file('gambar')){
            $file = $r->file('gambar');
            $filename = $file->getClientOriginalName();
            $r->file('gambar')->move("gambarArtikel/", $filename);
            $artikel->gambar = $filename;
        }

        $artikel->save();
        return redirect('/artikel');
    }

    public function hapus($id){
        $artikel = Artikel::find($id);
        $artikel->delete();
        return redirect(url('/artikel'));
    }

}
