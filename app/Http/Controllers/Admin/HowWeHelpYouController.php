<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\HowWeHelpYou;
use App\Http\Requests\CreateHowWeHelpYouRequest;
use App\Http\Requests\UpdateHowWeHelpYouRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\MainImage;


class HowWeHelpYouController extends Controller {

	/**
	 * Display a listing of howwehelpyou
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $howwehelpyou = HowWeHelpYou::with("mainimage")->get();

		return view('admin.howwehelpyou.index', compact('howwehelpyou'));
	}

	/**
	 * Show the form for creating a new howwehelpyou
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $mainimage = MainImage::pluck("main_text", "id")->prepend('Please select', 0);

	    
	    return view('admin.howwehelpyou.create', compact("mainimage"));
	}

	/**
	 * Store a newly created howwehelpyou in storage.
	 *
     * @param CreateHowWeHelpYouRequest|Request $request
	 */
	public function store(CreateHowWeHelpYouRequest $request)
	{
	    $request = $this->saveFiles($request);
		HowWeHelpYou::create($request->all());

		return redirect()->route(config('quickadmin.route').'.howwehelpyou.index');
	}

	/**
	 * Show the form for editing the specified howwehelpyou.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$howwehelpyou = HowWeHelpYou::find($id);
	    $mainimage = MainImage::pluck("main_text", "id")->prepend('Please select', 0);

	    
		return view('admin.howwehelpyou.edit', compact('howwehelpyou', "mainimage"));
	}

	/**
	 * Update the specified howwehelpyou in storage.
     * @param UpdateHowWeHelpYouRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateHowWeHelpYouRequest $request)
	{
		$howwehelpyou = HowWeHelpYou::findOrFail($id);

        $request = $this->saveFiles($request);

		$howwehelpyou->update($request->all());

		return redirect()->route(config('quickadmin.route').'.howwehelpyou.index');
	}

	/**
	 * Remove the specified howwehelpyou from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		HowWeHelpYou::destroy($id);

		return redirect()->route(config('quickadmin.route').'.howwehelpyou.index');
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
            HowWeHelpYou::destroy($toDelete);
        } else {
            HowWeHelpYou::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.howwehelpyou.index');
    }

}
