<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    public function buku()
	{
    	return $this->belongsTo(Buku::class, 'buku_id');
	}
}
