<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller{
    public function home(){
        return view('index');
    }
    public function about(){
        return view('about');
    }

    public function contacts(){
        return view('contacts');
    }
}
