<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Terms;
use App\Http\Requests\CreateTermsRequest;
use App\Http\Requests\UpdateTermsRequest;
use Illuminate\Http\Request;



class TermsController extends Controller {

	/**
	 * Display a listing of terms
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $terms = Terms::all();

		return view('admin.terms.index', compact('terms'));
	}

	/**
	 * Show the form for creating a new terms
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.terms.create');
	}

	/**
	 * Store a newly created terms in storage.
	 *
     * @param CreateTermsRequest|Request $request
	 */
	public function store(CreateTermsRequest $request)
	{
	    
		Terms::create($request->all());

		return redirect()->route(config('quickadmin.route').'.terms.index');
	}

	/**
	 * Show the form for editing the specified terms.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$terms = Terms::find($id);
	    
	    
		return view('admin.terms.edit', compact('terms'));
	}

	/**
	 * Update the specified terms in storage.
     * @param UpdateTermsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateTermsRequest $request)
	{
		$terms = Terms::findOrFail($id);

        

		$terms->update($request->all());

		return redirect()->route(config('quickadmin.route').'.terms.index');
	}

	/**
	 * Remove the specified terms from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Terms::destroy($id);

		return redirect()->route(config('quickadmin.route').'.terms.index');
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
            Terms::destroy($toDelete);
        } else {
            Terms::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.terms.index');
    }

}
