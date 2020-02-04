<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\peminjaman;
use Carbon\Carbon;

class AdminController extends Controller
{
	public function indexpinjam()
	{
    	$d['peminjamen'] = peminjaman::where('statuspeminjaman',1)->get();
        $d['bukus'] = Buku::all();
   		return view("admin.ambilbuku.peminjaman.index", $d);
	}
	public function addpeminjaman()
	{
		return view("admin.ambilbuku.peminjaman.add");
	}

	public function savepeminjaman(Request $r)
	{
		$pem = new peminjaman;
		$pem->namapeminjam = $r->input('namapeminjam');
		$pem->alamatpeminjam = $r->input('alamat');
		$pem->judulbuku = $r->input('judulbuku');
		$pin = Carbon::now('Asia/Jakarta')->today()->toDateString();
		$now = Carbon::now('Asia/Jakarta')->today();
		$kembali = $now->addDays('7')->toDateString();
		$pem->tanggalpinjam = $pin;
		$pem->tanggalkembali = $kembali;
		$pem->statuspeminjaman = 1;
		$pem->save();
		$getid = \App\Buku::where('judulbuku',$r->input('judulbuku'))->value('id');
		$stok = \App\Buku::find($getid);
		$stok->stok -= 1;
		$stok->save();
		return redirect(url('ambilbuku/pinjam'));
	}









	// public function indexkembali()
	// {
    // 	$d['peminjamen'] = peminjaman::where('statuspeminjaman',1)->get();
    //     $d['bukus'] = Buku::all();
   	// 	return view("admin.ambilbuku.pengembalian.index", $d);
	// }
	// public function addkembali()
	// {
	// 	return view("admin.ambilbuku.pengembalian.add");
	// }

	// public function savekembali(Request $r)
	// {
	// 	$pem = \App\peminjaman::find($r->input('id'));
	// 	$pem->tanggalkembali = $r->input('tanggalkembali');
	// 	$pem->denda = $r->input('denda');
	// 	$pem->statuspeminjaman = 2;
	// 	$pem->save();
	// 	$getid = \App\stok_buku::where('judulbuku',$r->input('judulbuku'))->value('id');
	// 	$getstok = \App\stok_buku::where('judulbuku',$r->input('judulbuku'))->value('jumlahbuku');
	// 	$stok = \App\stok_buku::find($getid);
	// 	$stok->jumlahbuku = $getstok + 1;
	// 	$stok->save();
	// 	return redirect(url('ambilbuku/kembali'));
	// }
}
