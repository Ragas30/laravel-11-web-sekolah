<?php

namespace App\Http\Controllers\berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class beritaController extends Controller
{
    public function index()
    {
        return view('berita.index');
    }
}
