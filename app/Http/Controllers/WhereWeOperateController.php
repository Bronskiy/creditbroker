<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WhereWeOperate;

class WhereWeOperateController extends Controller
{
  public function getData()
  {
    $data['WhereWeOperateData'] = WhereWeOperate::all();
    return view('pages.whereWeOperate',$data);
  }
}
