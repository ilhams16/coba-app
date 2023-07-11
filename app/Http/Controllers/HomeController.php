<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;

class HomeController extends Controller
{
    public function index() 
    {
        return view('home.index');
    }
    public function about() 
    {
        return view('home.about');
    }
}
