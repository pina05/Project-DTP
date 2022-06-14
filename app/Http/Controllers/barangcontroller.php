<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class barangcontroller extends Controller
{
    public function barang()
    {
        $bio_brng = DB::table('bio_brng')->get();
        return view('barang', ['bio_brng'=>$bio_brng]);     
    }
}
