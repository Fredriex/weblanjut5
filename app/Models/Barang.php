<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
class Barang{

    public function bacabarang(){
        $barang = DB::table('barang')->get();
        return $barang;
    }

    public function simpanbarang($x){
        DB::table('barang')->insert([
            'kode_br' => $x->kode_br,
            'nama' => $x->nama,
            'satuan' => $x->satuan,
            'harga_beli' => $x->harga_beli,
            'harga_jual' => $x->harga_jual,
        ]);

    }








    
}