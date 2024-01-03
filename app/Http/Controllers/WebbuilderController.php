<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebbuilderController extends Controller
{
    public function index(){
        return view('webbuilder.index', []);
    }
}
