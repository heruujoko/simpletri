<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    function signin(Request $request){
      $nik = $request->input('nik');
      $password = $request->input('password');
      if(Auth::attempt(['nik' => $nik, 'password' => $password])){
        return redirect()->intended('console');
      } else {
        Session::flash('error','NIK dan password tidak ditemukan.');
        return redirect('/');
      }
    }

    function signout(){
      Auth::logout();
      Session::flash('info', 'Anda sudah signout.');
      return redirect('/');
    }
}
