<?php

namespace App\Http\Controllers\about;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tentangKamiController extends Controller
{
    public function index()
    {
        return view('tentang_kami.index');
    }
}
