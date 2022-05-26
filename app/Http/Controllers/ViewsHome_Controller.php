<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsHome_Controller extends Controller
{
    public function navbar()
    {
        return view('navbar');
       
    }

    public function body()
    {
        return view('body');
       
    }

    public function footer()
    {
        return view('footer');
       
    }
}

