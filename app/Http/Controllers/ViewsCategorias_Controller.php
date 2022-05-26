<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsCategorias_Controller extends Controller
{
    public function add_category()
    {
        return view('Category/AddCategory');
       
    }

    public function delete_category()
    {
        return view('Category/DeleteCategory');
       
    }
}
