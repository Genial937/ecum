<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EconomicEmpowermentController extends Controller
{
    public function index(){
        return view('programs.economic_empowerment');
    }
}
