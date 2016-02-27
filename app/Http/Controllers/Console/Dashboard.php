<?php

namespace App\Http\Controllers\Console;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Dashboard extends Controller
{
    function index(){
      return view('console.dashboard');
    }
}
