<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Terms;

class TermsController extends Controller
{
    public function getData()
    {
      $data['TermsData'] = Terms::all();
      return view('pages.terms',$data);
    }
}
