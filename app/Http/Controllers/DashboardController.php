<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
return view('admin.index');
    }

    public function post()
    {
        return view('post');
    }
}
