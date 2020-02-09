<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Buku;
use App\Denda;

class BukuController extends Controller
{
   	public function index()
   	{
   		$d['kategoris'] = Kategori::all();
        $d['bukus'] = Buku::all();
        $d['dendas'] = Denda::all();
   		return view("admin.buku.index", $d);
   	}
    public function laporan()
    {
        return view("admin.buku.laporan");
    }
   	public function add()
   	{	
   		$kategori = Kategori::all();
        $denda = Denda::all();
   		return view('admin.buku.add', compact('kategori','denda'));
   	}
   	public function tambah(Request $r){
        $buku = new Buku;
        $buku->kategori_id = $r->kategori_id;
        $buku->judulbuku = $r->judulbuku;
        $buku->pembuat = $r->pembuat;
        $buku->deskripsi = $r->deskripsi;
        $buku->stok = $r->stok;
        $buku->denda_id = $r->denda_id;

        if ($r->hasFile('isi')) {
            $file = $r->file('isi');
            $filename = $file->getClientOriginalName();
            $r->file('isi')->move('isibuku/', $filename);
            $buku->isi = $filename;
        }

        if ($r->hasFile('gambar')) {
            $file1 = $r->file('gambar');
            $filename1 = $file1->getClientOriginalName();
            $r->file('gambar')->move('gambar/', $filename1);
            $buku->gambar = $filename1;
        }

        $buku->save();
        return redirect('/buku');
    }

    public function edit($id){
        $d['kategoris'] = Kategori::all();
        $d['bukus'] = Buku::find($id);
        $d['dendas'] = Denda::all();
        return view('admin.buku.edit', $d);
    }

    public function update(Request $r){
        $buku = Buku::find($r->id);
        $buku->kategori_id = $r->kategori_id;
        $buku->judulbuku = $r->judulbuku;
        $buku->pembuat = $r->pembuat;
        $buku->deskripsi = $r->deskripsi;
        $buku->stok = $r->stok;
        $buku->denda_id = $r->denda_id;

        if ($r->hasFile('isi')) {
            $file = $r->file('isi');
            $filename = $file->getClientOriginalName();
            $r->file('isi')->move('isibuku/', $filename);
            $buku->isi = $filename;
        }

        if($r->file('gambar')){
            $file = $r->file('gambar');
            $filename = $file->getClientOriginalName();
            $r->file('gambar')->move("gambar/", $filename);
            $buku->gambar = $filename;
        }

        $buku->save();
        return redirect('/buku');
    }   
    public function hapus($id){
        $buku = Buku::find($id);
        $buku->delete();
        return redirect(url('/buku'));
    }
}
