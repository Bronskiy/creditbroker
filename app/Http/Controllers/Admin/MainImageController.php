<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\MainImage;
use App\Http\Requests\CreateMainImageRequest;
use App\Http\Requests\UpdateMainImageRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class MainImageController extends Controller {

	/**
	 * Display a listing of mainimage
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $mainimage = MainImage::all();

		return view('admin.mainimage.index', compact('mainimage'));
	}

	/**
	 * Show the form for creating a new mainimage
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.mainimage.create');
	}

	/**
	 * Store a newly created mainimage in storage.
	 *
     * @param CreateMainImageRequest|Request $request
	 */
	public function store(CreateMainImageRequest $request)
	{
	    $request = $this->saveFiles($request);
		MainImage::create($request->all());

		return redirect()->route(config('quickadmin.route').'.mainimage.index');
	}

	/**
	 * Show the form for editing the specified mainimage.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$mainimage = MainImage::find($id);
	    
	    
		return view('admin.mainimage.edit', compact('mainimage'));
	}

	/**
	 * Update the specified mainimage in storage.
     * @param UpdateMainImageRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateMainImageRequest $request)
	{
		$mainimage = MainImage::findOrFail($id);

        $request = $this->saveFiles($request);

		$mainimage->update($request->all());

		return redirect()->route(config('quickadmin.route').'.mainimage.index');
	}

	/**
	 * Remove the specified mainimage from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		MainImage::destroy($id);

		return redirect()->route(config('quickadmin.route').'.mainimage.index');
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
            MainImage::destroy($toDelete);
        } else {
            MainImage::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.mainimage.index');
    }

}
