<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('login')->group(function(){
    Route::get('/', 'PageController@login');
    Route::get('/register', 'PageController@register');
    Route::get('/logout', 'PageController@logout');
    Route::post('/proses-login', 'PageController@proses_login');
    Route::post('/proses-register', 'PageController@proses_register');
});


Route::group(['middleware' => 'admin'], function(){
    Route::get('/admin', function () {
        return view('admin.index');
        });
    Route::get('/kategori', function () {
        return view('admin.kategori.index');
        });
    Route::get('/denda', function () {
        return view('admin.denda.index');
        });

    Route::get('/pinjem', function () {
        return view('admin.ambilbuku.peminjaman.add');
        });
    Route::prefix('buku')->group(function() {
        Route::get('/', 'BukuController@index');
        Route::get('/laporan', 'BukuController@laporan');
        Route::get('/add', 'BukuController@add');
        Route::post('/tambah', 'BukuController@tambah');
        Route::get('/edit/{id}', 'BukuController@edit');
        Route::post('/update', 'BukuController@update');
        Route::get('/hapus/{id}', 'BukuController@hapus');
        });
    Route::prefix('kategori')->group(function() {
        Route::get('/', 'KategoriController@index');
        Route::post('/add', 'KategoriController@add');
        Route::get('/edit/{id}', 'KategoriController@edit');
        Route::post('/update', 'KategoriController@update');
        Route::get('/delete/{id}', 'KategoriController@delete');
        });
    Route::prefix('denda')->group(function() {
        Route::get('/', 'DendaController@index');
        Route::post('/add', 'DendaController@add');
        Route::get('/edit/{id}', 'DendaController@edit');
        Route::post('/update', 'DendaController@update');
        Route::get('/delete/{id}', 'DendaController@delete');
        });
    Route::prefix('ambilbuku')->group(function() {
        Route::get('/pinjam', 'AdminController@indexpinjam');
        Route::get('/add1', 'AdminController@addpeminjaman');
        Route::post('postpinjam', 'AdminController@savepeminjaman');
        Route::get('/kembali', 'AdminController@indexkembali');
        Route::get('/add2', 'AdminController@addkembali');
        Route::post('postkembali', 'AdminController@savekembali')->name('savepinjam');
        Route::get('/kembalikan/{id}', 'AdminController@kembalikan');
        Route::post('savekembali', 'AdminController@savekembali');
        });
});

Route::group(['middleware' => 'user'], function(){
    Route::get('/user', function () {
        return view('user.index');
    });
    Route::get('/artikel', function () {
        return view('user.artikel.index');
    });
    Route::prefix('dabuku')->group(function() {
        Route::get('/', 'DabukuController@index');
        Route::get('/bacabuku/{isi}', 'DabukuController@bacabuku');
    });
});