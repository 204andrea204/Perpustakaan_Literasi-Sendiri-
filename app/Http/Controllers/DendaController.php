<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Denda;

class DendaController extends Controller
{
    public function index()
    {
    	$denda = \App\Denda::all(); 
    	return view('admin.denda.index', compact('denda'));
    }
    public function add(Request $r)
    {
    	$denda = new Denda;
        $denda->kategori_denda = $r->kategori_denda;
        $denda->denda = $r->denda;
        $denda->save();
        return redirect('/denda');
    }
    public function edit($id){
        $denda = Denda::find($id);
    	return view('admin.denda.edit')->with('denda',$denda);
    }
    public function update(Request $r){
        $denda = Denda::find($r->id);
        $denda->kategori_denda = $r->kategori_denda;
        $denda->denda = $r->denda;
        $denda->save();
        return redirect('/denda');
    }
    public function delete($id)
    {
    	$denda = denda::find($id);
    	$denda->delete();
    	return redirect(url('/denda'));
    }
}
