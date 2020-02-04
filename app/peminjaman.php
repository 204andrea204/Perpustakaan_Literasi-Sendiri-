<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    public function denda()
	{
    	return $this->belongsTo(Denda::class, 'denda_id');
	}
}
