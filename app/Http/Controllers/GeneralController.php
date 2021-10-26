<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index(){
        return view('partners');
    }

    public function create(){
        return view('testimonials');
    }

    public function show(){
        return view('gallery');
    }
}
