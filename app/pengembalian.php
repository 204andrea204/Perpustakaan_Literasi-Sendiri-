<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengembalian extends Model
{
    public function peminjaman()
	{
    	return $this->belongsTo(peminjaman::class, 'peminjaman_id');
	}
}
