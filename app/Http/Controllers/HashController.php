<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
  public function hash($value){
    return view('hash')->with('hashvalue', $value);
  }
