<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\SEO;
use App\Http\Requests\CreateSEORequest;
use App\Http\Requests\UpdateSEORequest;
use Illuminate\Http\Request;



class SEOController extends Controller {

	/**
	 * Display a listing of seo
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $seo = SEO::all();

		return view('admin.seo.index', compact('seo'));
	}

	/**
	 * Show the form for creating a new seo
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.seo.create');
	}

	/**
	 * Store a newly created seo in storage.
	 *
     * @param CreateSEORequest|Request $request
	 */
	public function store(CreateSEORequest $request)
	{
	    
		SEO::create($request->all());

		return redirect()->route(config('quickadmin.route').'.seo.index');
	}

	/**
	 * Show the form for editing the specified seo.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$seo = SEO::find($id);
	    
	    
		return view('admin.seo.edit', compact('seo'));
	}

	/**
	 * Update the specified seo in storage.
     * @param UpdateSEORequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateSEORequest $request)
	{
		$seo = SEO::findOrFail($id);

        

		$seo->update($request->all());

		return redirect()->route(config('quickadmin.route').'.seo.index');
	}

	/**
	 * Remove the specified seo from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		SEO::destroy($id);

		return redirect()->route(config('quickadmin.route').'.seo.index');
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
            SEO::destroy($toDelete);
        } else {
            SEO::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.seo.index');
    }

}
