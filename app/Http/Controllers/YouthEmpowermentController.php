<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YouthEmpowermentController extends Controller
{
    public function index(){
        return view('programs.youth_empowerment');
    }
}
