<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home(){
        return view('home');
    }

    public function basic(){
        return view('basic');
    }

    public function fitur(){
        return view('fitur');
    }

    public function kuis(){
        return view('kuis');
    }

    public function soalkuis(){
        return view('partials/soalkuis');
    }
}
