<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheWayWeWork;

class TheWayWeWorkController extends Controller
{
  public function getData()
  {
    $data['TheWayWeWorkData'] = TheWayWeWork::all();
    return view('pages.theWayWeWork',$data);
  }
}
