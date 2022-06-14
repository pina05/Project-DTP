<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class detailcontroller extends Controller
{
    public function detail()
    {
        $bio_detailstock = DB::table('bio_detailstock')->get();
        return view('detail', ['bio_detailstock'=>$bio_detailstock]);     
    }
}
