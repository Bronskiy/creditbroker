<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\WhereWeOperate;
use App\Http\Requests\CreateWhereWeOperateRequest;
use App\Http\Requests\UpdateWhereWeOperateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\MainImage;
use App\SEO;


class WhereWeOperateController extends Controller {

	/**
	 * Display a listing of whereweoperate
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $whereweoperate = WhereWeOperate::with("mainimage")->with("seo")->get();

		return view('admin.whereweoperate.index', compact('whereweoperate'));
	}

	/**
	 * Show the form for creating a new whereweoperate
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $mainimage = MainImage::pluck("link_title", "id")->prepend('Please select', 0);
$seo = SEO::pluck("meta_title", "id")->prepend('Please select', 0);

	    
	    return view('admin.whereweoperate.create', compact("mainimage", "seo"));
	}

	/**
	 * Store a newly created whereweoperate in storage.
	 *
     * @param CreateWhereWeOperateRequest|Request $request
	 */
	public function store(CreateWhereWeOperateRequest $request)
	{
	    $request = $this->saveFiles($request);
		WhereWeOperate::create($request->all());

		return redirect()->route(config('quickadmin.route').'.whereweoperate.index');
	}

	/**
	 * Show the form for editing the specified whereweoperate.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$whereweoperate = WhereWeOperate::find($id);
	    $mainimage = MainImage::pluck("link_title", "id")->prepend('Please select', 0);
$seo = SEO::pluck("meta_title", "id")->prepend('Please select', 0);

	    
		return view('admin.whereweoperate.edit', compact('whereweoperate', "mainimage", "seo"));
	}

	/**
	 * Update the specified whereweoperate in storage.
     * @param UpdateWhereWeOperateRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateWhereWeOperateRequest $request)
	{
		$whereweoperate = WhereWeOperate::findOrFail($id);

        $request = $this->saveFiles($request);

		$whereweoperate->update($request->all());

		return redirect()->route(config('quickadmin.route').'.whereweoperate.index');
	}

	/**
	 * Remove the specified whereweoperate from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		WhereWeOperate::destroy($id);

		return redirect()->route(config('quickadmin.route').'.whereweoperate.index');
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
            WhereWeOperate::destroy($toDelete);
        } else {
            WhereWeOperate::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.whereweoperate.index');
    }

}
