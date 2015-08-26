<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HashController extends Controller
{
  public function hash($value){
    return view('hash')->with('hashvalue', $value);
  }

}
