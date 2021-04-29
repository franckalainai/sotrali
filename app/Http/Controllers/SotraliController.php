<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SotraliController extends Controller
{
    public function index(){
        return view('sotrali');
    }

    public function sotra(){
        return view('sotra');
    }
}
