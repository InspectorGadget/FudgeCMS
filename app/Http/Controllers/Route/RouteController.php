<?php

namespace App\Http\Controllers\Route;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RouteController extends Controller
{

    public function index() {
        return view('home.index');
    }

    public function login() {
        return view('login.index');
    }

}
