<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUS extends Controller
{
  public function index(){
      return view('contactus');
  }
}
