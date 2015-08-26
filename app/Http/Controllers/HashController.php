<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Hash;

class HashController extends Controller
{
  public function hash($value){
    return view('hash')->with('hashvalue', Hash::make($value));
  }

}
