<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Film;

class WebController extends Controller
{
    public function index(){
        $films = Film::all();
        return view('index', compact('films'));
        
    }
    
}
