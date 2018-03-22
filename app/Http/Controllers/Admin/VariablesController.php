<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Variables;
use App\Http\Requests\CreateVariablesRequest;
use App\Http\Requests\UpdateVariablesRequest;
use Illuminate\Http\Request;



class VariablesController extends Controller {

	/**
	 * Display a listing of variables
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $variables = Variables::all();

		return view('admin.variables.index', compact('variables'));
	}

	/**
	 * Show the form for creating a new variables
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.variables.create');
	}

	/**
	 * Store a newly created variables in storage.
	 *
     * @param CreateVariablesRequest|Request $request
	 */
	public function store(CreateVariablesRequest $request)
	{
	    
		Variables::create($request->all());

		return redirect()->route(config('quickadmin.route').'.variables.index');
	}

	/**
	 * Show the form for editing the specified variables.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$variables = Variables::find($id);
	    
	    
		return view('admin.variables.edit', compact('variables'));
	}

	/**
	 * Update the specified variables in storage.
     * @param UpdateVariablesRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateVariablesRequest $request)
	{
		$variables = Variables::findOrFail($id);

        

		$variables->update($request->all());

		return redirect()->route(config('quickadmin.route').'.variables.index');
	}

	/**
	 * Remove the specified variables from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Variables::destroy($id);

		return redirect()->route(config('quickadmin.route').'.variables.index');
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
            Variables::destroy($toDelete);
        } else {
            Variables::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.variables.index');
    }

}
