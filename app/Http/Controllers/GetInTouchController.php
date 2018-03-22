<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\GetInTouch;
use App\Http\Requests\CreateContactEntriesRequest;
use App\ContactEntries;

class GetInTouchController extends Controller
{
  public function getData()
  {
    $data['GetInTouchData'] = GetInTouch::all();
    return view('pages.contact',$data);
  }

  public function store(CreateContactEntriesRequest $request)
	{

		ContactEntries::create($request->all());
    return redirect('/thank-you');

  }
  public function thankYou()
  {
    $data['GetInTouchData'] = GetInTouch::all();
    return view('pages.thankyou',$data);
  }

}
