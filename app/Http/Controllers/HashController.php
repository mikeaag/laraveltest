<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Hash;

class HashController extends Controller
{
  private $hash = null;
  
  public function __construct(Hash $hash){
    $this->hash = $hash;
  }
  
  public function hash($value){
    return view('hash')->with('hashvalue', $this->hash->make($value));
  }

}
