<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index(){
        // render the first available view from the array
        return View::first(['index', 'home.index']);
    }
}
