<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BUku;

class DabukuController extends Controller
{
    public function index(Request $request)
   	{
        $q = $request->q;
        if (!empty($q)) {
            $d['bukus'] = Buku::query()->where('judulbuku', 'LIKE', "%{$q}%")->orWhere('pembuat', 'LIKE', "%{$q}%")->paginate(10);
        }else{
        $d['bukus'] = Buku::all();
        }
   		return view("user.dabuku.index", $d);
   	}

    public function bacabuku($isi){
      $d['nama_file'] = $isi;
      return view("user.dabuku.baca", $d);
    }
}
