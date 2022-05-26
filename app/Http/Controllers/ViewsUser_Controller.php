<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsUser_Controller extends Controller
{
    public function add_user()
    {
        return view('User/AddUser');
       
    }

    public function modify_user()
    {
        return view('User/ModifyUser');
       
    }

    public function delete_user()
    {
        return view('User/DeleteUser');
       
    }
}
