<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;
            // if($usertype=='user'){
            if ($usertype) {
                return redirect()->route('page.home');
            }
            // else if($usertype=='admin'){
            //     return view('admin.admindashboard');
            // }
            else {
                return redirect()->back();
            }
        }
    }

    public function post()
    {
        return view('post');
    }
}
