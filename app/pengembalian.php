<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengembalian extends Model
{
    public function peminjaman()
	{
    	return $this->belongsTo(peminjaman::class, 'peminjaman_id');
	}
	public function buku()
	{
    	return $this->belongsTo(Buku::class, 'buku_id');
	}
}
