<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HowWeHelpYou;

class HowWeHelpYouController extends Controller
{
  public function getData()
  {
    $data['HowWeHelpYouData'] = HowWeHelpYou::all();
    return view('pages.howWeHelpYou',$data);
  }
}
