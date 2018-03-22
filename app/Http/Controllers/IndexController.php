<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomePage;

class IndexController extends Controller
{
  public function getData()
  {
    $data['HomePageData'] = HomePage::all();
    return view('pages.home',$data);
  }

}
