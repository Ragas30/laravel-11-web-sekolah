<?php

namespace App\Http\Controllers\kegiatan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class kegiatanController extends Controller
{
    public function index()
    {
        return view('kegiatan.index');
    }
}
