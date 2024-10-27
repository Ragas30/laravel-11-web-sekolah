<?php

namespace App\Http\Controllers\berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class beritaController extends Controller
{
    public function index()
    {
        // $databerita = DB::table('berita');
        return view('berita.index', compact('databerita'));
    }
}
