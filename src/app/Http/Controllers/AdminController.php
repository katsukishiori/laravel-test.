<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
    return view('admin');
    }

     public function thanks()
    {
    return view('thanks');
    }
}
