<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index(){
        return view('blog')->with('description', 'Moderna - Блог')
            ->with('title', 'Moderna - Блог');
    }
}
