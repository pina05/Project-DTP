<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class stockcontroller extends Controller
{
    public function stock()
    {
        $bio_stokchange = DB::table('bio_stokchange')->get();
        return view('stock', ['bio_stokchange'=>$bio_stokchange]);     
    }
}
