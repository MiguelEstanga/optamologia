<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function citas_create()
    {
        return view('admin.create_citas');
    }
}
