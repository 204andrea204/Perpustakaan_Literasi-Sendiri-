<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    public function kategori()
	{
    	return $this->belongsTo(Kategori::class, 'kategori_id');
	}
	public function denda()
	{
    	return $this->belongsTo(Denda::class, 'denda_id');
	}
}
