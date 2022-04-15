<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;


class UserController extends Controller
{
    public function index()
    {
    	$buatuser = \App\User::all(); 
    	return view('admin.buatuser.index', compact('buatuser'));
    }

    public function add()
    {
    	$user = User::all();
    	return view('admin.buatuser.add', compact('user'));
    }
    public function tambah(Request $r)
    {
    	$user = new User;
    	$user->name = $r->name;
    	$user->email = $r->email;
    	$user->password = bcrypt($r->password);
    	$user->role = $r->role;
        if($r->hasFile('foto')){
                $name = $r->file('foto')->getClientOriginalName();
                $r->foto->move(public_path('/foto/user'), $name);
                $user->foto = $name;
            }
    	$user->save();
    	return redirect('/buatuser');
    }
    public function edit($id){
        $d['users'] = User::find($id);
        return view('admin.buatuser.edit', $d);
    }
    public function update(Request $r){
        $user = User::find($r->id);
        $user->name = $r->name;
        $user->email = $r->email;
        $user->password = bcrypt($r->password);
        if($r->file('foto')){
            $file = $r->file('foto');
            $filename = $file->getClientOriginalName();
            $r->file('foto')->move("foto/user", $filename);
            $l->foto = $filename;
        }
        $user->save();
        return redirect('/buatuser');
    }   
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect(url('/buatuser'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
