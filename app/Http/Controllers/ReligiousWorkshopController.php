<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReligiousWorkshopController extends Controller
{
    public function index(){
        return view('programs.inter_religious_workshops');
    }
}
