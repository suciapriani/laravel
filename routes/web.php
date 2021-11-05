<?php

use Illuminate\Support\Facades\Route;
//import controller yang akan digunakan
use App\http\Controllers\MyController;


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
Route::get('tentang',function () {
    return "<h1>Hello</h1>"
    . "selamat datang di webapp saya<br>"
    . "laravel emang keren";
});

Route::get('saya', function () {
    //me - return view ke file bernama profile
    //di folder 'resources/views'
    $mamat = "Mamat Abdullah";
    return view('profile', compact('mamat'));
});

Route::get('syukur', function () {
    $nama = "syukur sidik ";
    $umur = "17 tahun";
    $tgl = "bandung 07 april 2004";
    $hobi = "menggambar";
    $agama = "islam";
    return view('syukur', compact('nama','umur','tgl','hobi','agama'));
    
});

Route::get('sifa', function () {
    $nama = "sifa afna";
    $umur = "17 tahun";
    $tgl = "bandung 03 desember 2004";
    $hobi = "bernyanyi";
    $agama = "islam";
    return view('sifa', compact('nama','umur','tgl','hobi','agama'));
    
});

Route::get('suci', function () {
    $nama = "suci apriani";
    $umur = "17 tahun";
    $tgl = "bandung 07 april 2004";
    $hobi = "melukis";
    $agama = "islam";
    return view('suci', compact('nama','umur','tgl','hobi','agama'));
    
});

Route::get('selvi', function () {
    $nama = "selvi puspita";
    $umur = "18 tahun";
    $tgl = "bandung 22 november 2003";
    $hobi = "nonton drakor";
    $agama = "islam";
    return view('selvi', compact('nama','umur','tgl','hobi','agama'));
    
});

Route::get('silvi', function () {
    $nama = "silvi al-jahro";
    $umur = "17 tahun";
    $tgl = "bandung 10 januari 2003";
    $hobi = "mendengarkan alat musik";
    $agama = "islam";
    return view('silvi', compact('nama','umur','tgl','hobi','agama'));
    
});
//jalantkan server laravel -> php artisan serve
//akses localhos:8000/tentang


//route parameter 
Route::get('posting/{id}', function ($a) {
    return "halaman posting ke - <b>$a</b>";
});
//latihan
Route::get('biodata/{nama}/{alamat}/{jenis}/{tb}/{bb}', function ($nama,$alamat,$jenis,$tb,$bb) {
    return view('biodata', compact('nama','alamat','jenis','tb','bb'));
});

//route optional parameter 
Route::get('post/{id?}', function ($a =1) {
    return "halaman posting ke - <b>$a</b>";
});

//latihan
Route::get('bio/{nama?}/{alamat?}/{jenis?}/{tb?}/{bb?}', function ($nama = null,$alamat =null ,$jenis =null,$tb =null,$bb =null ) {
    return view('bio', compact('nama','alamat','jenis','tb','bb'));
});

//mengakses data melalui model
Route::get('testmodel', function () {
    $query = App\Models\Post::all();
    return $query;
});

//mencari data berdasarkan parameter 'id'
Route::get('testmodel/{id}', function ($id) {
    $query = App\Models\Post::find($id);
    return $query;
});

//mencari data berdasarkan field 'title' yang sama dengan
//parameter 's'
Route::get('testmodel-cari/{search}', function ($s) {
    $query = App\Models\Post::where('title','like',"%$s%")->get();
    return $query;
});

//mengubah judul dari data ke 2 berdasarkan 'id'
Route::get('testmodel-/update', function () {
    $query = App\Models\Post::find(2);
    $query->title = "Bane Si Bajak Laut";
    $query->save();
    return $query;
});

//menambah data baru
Route::get('testmodel-add', function () {
    $query = new App\Models\Post();
    $query->title = "sholawat penghapus maksiat";
    $query->content = "loren ipsum si amet dolor";
    $query->save();
    return $query;
});

Route::get('testmodel-delete/{id}', function ($id) {
    $query = App\Models\Post::find($id);
    $query->delete();
    return redirect('/testmodel');
});

//latihan memunculkan semua data
Route::get('barang', function () {
    $query = App\Models\barang::all();
    return $query;
});

Route::get('pesanan', function () {
    $query = App\Models\pesanan::all();
    return $query;
});

Route::get('pembelian', function () {
    $query = App\Models\pembelian::all();
    return $query;
});

Route::get('pembeli', function () {
    $query = App\Models\pembeli::all();
    return $query;
});

Route::get('suplier', function () {
    $query = App\Models\suplier::all();
    return $query;
});

//route dengan controller 
Route::get('data-siswa',[MyController::class, 'index']);
Route::get('posts',[MyController::class, 'posting']);
Route::get('barang',[MyController::class, 'barang']);
Route::get('pembelian',[MyController::class, 'pembelian']);
Route::get('pembelian/{id}',[MyController::class, 'singlepembelian']);


//latihan hero

Route::get('hero',[MyController::class, 'hero']);
Route::get('hero/{id}',[MyController::class, 'singlehero']);




