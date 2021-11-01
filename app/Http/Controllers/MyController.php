<?php

namespace App\Http\Controllers;
//mengimport model fost
use App\Models\Post;
use App\Models\barang;
use App\Models\pembelian;
use App\Models\singlepembelian;



use Illuminate\Http\Request;

class MyController extends Controller
{
    //membuat method
    public function index()
    {
        $data =[
            ['nama' => 'dadang koelo','kelas'=>'XII RPL 3'],
            ['nama' => 'mamat kelvin','kelas'=>'XII RPL 3'],
            ['nama' => 'asep jenang','kelas'=>'XII RPL 3']
        ];
        return view('latihan', compact('data'));
    }
    public function posting()
    {
        $posts = post::all();
        return view('post', compact ('posts'));
    }
    public function barang()
    {
        $barang = barang::all();
        return view('barang', compact ('barang'));
    }
    public function pembelian()
    {
        $pembelian = pembelian::all();
        return view('pembelian', compact ('pembelian'));
    }
    public function singlepembelian($id)
    {
        $singlepembelian= pembelian::findOrFail($id);
        return view('singlepembelian', compact ('singlepembelian'));
    }

}

