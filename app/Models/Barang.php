<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
class Barang{

    public function bacabarang(){
        $barang = DB::table('barang')->get();
        return $barang;
    }










    
}