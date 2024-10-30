<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as baseController;
use App\Models\Barang;
use Illuminate\Foundation\Validation\ValidatesRequests;
class Controller extends BaseController{
    

    public function tampilbarang(){
        $barang = new Barang();
        $hasil = $barang -> bacabarang();
        return view('tampilbarang', ['hasil' => $hasil]);
    }

    public function tambahbarang(){
        return view('tambahbarang');
    }

    
    public function simpanbarang(Request $xx){
        $x = new Barang();
        $x->simpanbarang($xx);
        $this->tampilbarang();
        $barang = new Barang();
        $hasil = $barang -> bacabarang();
        return view('tampilbarang', ['hasil' => $hasil]);
    }


}
    

