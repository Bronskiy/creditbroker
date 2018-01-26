<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\TheWayWeWork;
use App\Http\Requests\CreateTheWayWeWorkRequest;
use App\Http\Requests\UpdateTheWayWeWorkRequest;
use Illuminate\Http\Request;

use App\MainImage;
use App\SEO;


class TheWayWeWorkController extends Controller {

	/**
	 * Display a listing of thewaywework
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $thewaywework = TheWayWeWork::with("mainimage")->with("seo")->get();

		return view('admin.thewaywework.index', compact('thewaywework'));
	}

	/**
	 * Show the form for creating a new thewaywework
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $mainimage = MainImage::pluck("", "id")->prepend('Please select', 0);
$seo = SEO::pluck("meta_title", "id")->prepend('Please select', 0);

	    
	    return view('admin.thewaywework.create', compact("mainimage", "seo"));
	}

	/**
	 * Store a newly created thewaywework in storage.
	 *
     * @param CreateTheWayWeWorkRequest|Request $request
	 */
	public function store(CreateTheWayWeWorkRequest $request)
	{
	    
		TheWayWeWork::create($request->all());

		return redirect()->route(config('quickadmin.route').'.thewaywework.index');
	}

	/**
	 * Show the form for editing the specified thewaywework.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$thewaywework = TheWayWeWork::find($id);
	    $mainimage = MainImage::pluck("", "id")->prepend('Please select', 0);
$seo = SEO::pluck("meta_title", "id")->prepend('Please select', 0);

	    
		return view('admin.thewaywework.edit', compact('thewaywework', "mainimage", "seo"));
	}

	/**
	 * Update the specified thewaywework in storage.
     * @param UpdateTheWayWeWorkRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateTheWayWeWorkRequest $request)
	{
		$thewaywework = TheWayWeWork::findOrFail($id);

        

		$thewaywework->update($request->all());

		return redirect()->route(config('quickadmin.route').'.thewaywework.index');
	}

	/**
	 * Remove the specified thewaywework from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		TheWayWeWork::destroy($id);

		return redirect()->route(config('quickadmin.route').'.thewaywework.index');
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
            TheWayWeWork::destroy($toDelete);
        } else {
            TheWayWeWork::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.thewaywework.index');
    }

}
