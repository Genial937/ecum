<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WomenEmpowermentController extends Controller
{
    public function index(){
        return view('programs.women_empowerment');
    }
}
