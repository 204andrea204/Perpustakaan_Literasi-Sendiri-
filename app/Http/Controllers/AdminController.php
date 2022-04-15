<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use App\peminjaman;
use App\pengembalian;
use Carbon\Carbon;
use App\Denda;
use Auth;

use DateTime;

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
		
		$pin = Carbon::now('Asia/Jakarta')->today()->toDateString();
		$now = Carbon::now('Asia/Jakarta')->today();
		$kembali = $now->addDays('7')->toDateString();


		$pem = new peminjaman;
		$pem->namapeminjam = $r->input('namapeminjam');
		$pem->alamatpeminjam = $r->input('alamat');
		$pem->buku_id = $r->input('buku_id');
		$pem->tanggalpinjam = $pin;
		$pem->tanggalkembali = $kembali;
		$pem->statuspeminjaman = 1;
		$pem->save();

		$getid = \App\Buku::find($r->input('buku_id'))->id;
		$stok = \App\Buku::find($getid);
		$stok->stok -= 1;
		$stok->save();
		return redirect(url('ambilbuku/pinjam'));
	}









	public function indexkembali()
	{
    	$d['peminjamen'] = peminjaman::where('statuspeminjaman',1)->get();
        $d['bukus'] = Buku::all();
   		return view("admin.ambilbuku.pengembalian.index", $d);
	}
	public function addkembali()
	{
		return view("admin.ambilbuku.pengembalian.add");
	}
	public function kembalikan($id){

		$denda = peminjaman::find($id)->buku->denda->denda;
		$peminjaman = peminjaman::find($id);
        $d['peminjaman'] = $peminjaman;
        $tanggalkembali = $peminjaman->tanggalkembali;
        $tanggalsekarang = Date("Y-m-d");

        if($tanggalsekarang < $tanggalkembali){
        	$d['keterangan'] = "Tidak ada denda";
        }
        else{ 
        	$datetime1 = new DateTime($tanggalsekarang);
			$datetime2 = new DateTime($tanggalkembali);
			$interval = $datetime1->diff($datetime2);
			$days = $interval->format('%a');
        	$d['keterangan'] = "Denda sebesar Rp". $days*$denda .", lewat ". $days ." Hari masa pengembalian buku";
        }
        return view('admin.ambilbuku.pengembalian.kembalikan', $d);
    }

	public function savekembali(Request $r)
	{
		$pem = new pengembalian;
		$pem->nama_pengembali = $r->input('namapengembali');
		$pem->tanggal_kembali = Date("Y-m-d");
		// $pem->statuspeminjaman = 2;
		$pem->peminjaman_id = $r->input('peminjaman_id');
		$pem->buku_id = $r->input('buku_id');


        $tanggalkembali = $r->input('tanggalkembali');
        $tanggalsekarang = Date("Y-m-d");
		$datetime1 = new DateTime($tanggalsekarang);
		$datetime2 = new DateTime($tanggalkembali);
		$interval = $datetime1->diff($datetime2);
		$days = $interval->format('%a');
		$denda = $days*$r->input('denda');

		$pem->denda = $denda;
		$pem->save();

		$getid = \App\Buku::where('id',$r->input('buku_id'))->value('id');
		$stok = \App\Buku::find($getid);
		$stok->stok += 1;
		$stok->save();

		$p = Peminjaman::find($r->input("peminjaman_id"));
		$p->statuspeminjaman = 2;
		$p->save();

		return redirect(url('ambilbuku/kembali'));
	}
}
