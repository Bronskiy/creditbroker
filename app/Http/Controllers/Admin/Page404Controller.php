<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Page404;
use App\Http\Requests\CreatePage404Request;
use App\Http\Requests\UpdatePage404Request;
use Illuminate\Http\Request;



class Page404Controller extends Controller {

	/**
	 * Display a listing of page404
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $page404 = Page404::all();

		return view('admin.page404.index', compact('page404'));
	}

	/**
	 * Show the form for creating a new page404
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.page404.create');
	}

	/**
	 * Store a newly created page404 in storage.
	 *
     * @param CreatePage404Request|Request $request
	 */
	public function store(CreatePage404Request $request)
	{
	    
		Page404::create($request->all());

		return redirect()->route(config('quickadmin.route').'.page404.index');
	}

	/**
	 * Show the form for editing the specified page404.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$page404 = Page404::find($id);
	    
	    
		return view('admin.page404.edit', compact('page404'));
	}

	/**
	 * Update the specified page404 in storage.
     * @param UpdatePage404Request|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdatePage404Request $request)
	{
		$page404 = Page404::findOrFail($id);

        

		$page404->update($request->all());

		return redirect()->route(config('quickadmin.route').'.page404.index');
	}

	/**
	 * Remove the specified page404 from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Page404::destroy($id);

		return redirect()->route(config('quickadmin.route').'.page404.index');
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
            Page404::destroy($toDelete);
        } else {
            Page404::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.page404.index');
    }

}
