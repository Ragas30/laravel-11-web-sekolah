<?php

namespace App\Http\Controllers\contactus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contactUsController extends Controller
{
    public function index()
    {
        return  view('contact.index');
    }
}
