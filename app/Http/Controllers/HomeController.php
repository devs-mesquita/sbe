<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        // $areas = Area::all();
        return view('home');
 
  
    }

}
