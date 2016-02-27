<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    function signin(){
      return view('signin');
    }
}
