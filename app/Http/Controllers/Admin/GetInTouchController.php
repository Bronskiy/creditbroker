<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\GetInTouch;
use App\Http\Requests\CreateGetInTouchRequest;
use App\Http\Requests\UpdateGetInTouchRequest;
use Illuminate\Http\Request;

use App\MainImage;
use App\SEO;


class GetInTouchController extends Controller {

	/**
	 * Display a listing of getintouch
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $getintouch = GetInTouch::with("mainimage")->with("seo")->get();

		return view('admin.getintouch.index', compact('getintouch'));
	}

	/**
	 * Show the form for creating a new getintouch
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $mainimage = MainImage::pluck("main_text", "id")->prepend('Please select', 0);
$seo = SEO::pluck("meta_title", "id")->prepend('Please select', 0);

	    
	    return view('admin.getintouch.create', compact("mainimage", "seo"));
	}

	/**
	 * Store a newly created getintouch in storage.
	 *
     * @param CreateGetInTouchRequest|Request $request
	 */
	public function store(CreateGetInTouchRequest $request)
	{
	    
		GetInTouch::create($request->all());

		return redirect()->route(config('quickadmin.route').'.getintouch.index');
	}

	/**
	 * Show the form for editing the specified getintouch.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$getintouch = GetInTouch::find($id);
	    $mainimage = MainImage::pluck("main_text", "id")->prepend('Please select', 0);
$seo = SEO::pluck("meta_title", "id")->prepend('Please select', 0);

	    
		return view('admin.getintouch.edit', compact('getintouch', "mainimage", "seo"));
	}

	/**
	 * Update the specified getintouch in storage.
     * @param UpdateGetInTouchRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateGetInTouchRequest $request)
	{
		$getintouch = GetInTouch::findOrFail($id);

        

		$getintouch->update($request->all());

		return redirect()->route(config('quickadmin.route').'.getintouch.index');
	}

	/**
	 * Remove the specified getintouch from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		GetInTouch::destroy($id);

		return redirect()->route(config('quickadmin.route').'.getintouch.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            GetInTouch::destroy($toDelete);
        } else {
            GetInTouch::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.getintouch.index');
    }

}
