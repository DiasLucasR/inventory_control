<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsProdutos_Controller extends Controller
{
    public function add_products()
    {
        return view('Products/AddProducts');
       
    }

    public function modify_products()
    {
        return view('Products/ModifyProducts');
       
    }

    public function delete_products()
    {
        return view('Products/DeleteProducts');
       
    }
}
