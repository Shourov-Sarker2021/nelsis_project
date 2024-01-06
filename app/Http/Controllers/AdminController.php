<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view('layouts.admin');
    }

    public function blog(){
        return view('layouts.blog');
    }
    public function about(){
        return view('layouts.about');
    }
    public function shop(){
        return view('layouts.shop');
    }
    public function contact(){
        return view('layouts.contact');
    }
    public function page(){
        return view('layouts.page');
    }
}
