<?php

namespace App\Http\Controllers\Console;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
  function index(){
    $data['active'] = 'dashboard';
    $data['subactive'] = '';
    return view('console.dashboard',$data);
  }
}
