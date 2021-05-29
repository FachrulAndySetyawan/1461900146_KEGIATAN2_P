<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ms_buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Bukuaah extends Controller
{
    public function buku()
    {
        $buku = DB::table('ms_buku')->get();
        return view('buku0146', ['ms_buku'=>$buku]);
    }
}
