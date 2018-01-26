<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Terms&Conditions;
use App\Http\Requests\CreateTerms&ConditionsRequest;
use App\Http\Requests\UpdateTerms&ConditionsRequest;
use Illuminate\Http\Request;



class Terms&ConditionsController extends Controller {

	/**
	 * Display a listing of terms&conditions
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $terms&conditions = Terms&Conditions::all();

		return view('admin.terms&conditions.index', compact('terms&conditions'));
	}

	/**
	 * Show the form for creating a new terms&conditions
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.terms&conditions.create');
	}

	/**
	 * Store a newly created terms&conditions in storage.
	 *
     * @param CreateTerms&ConditionsRequest|Request $request
	 */
	public function store(CreateTerms&ConditionsRequest $request)
	{
	    
		Terms&Conditions::create($request->all());

		return redirect()->route(config('quickadmin.route').'.terms&conditions.index');
	}

	/**
	 * Show the form for editing the specified terms&conditions.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$terms&conditions = Terms&Conditions::find($id);
	    
	    
		return view('admin.terms&conditions.edit', compact('terms&conditions'));
	}

	/**
	 * Update the specified terms&conditions in storage.
     * @param UpdateTerms&ConditionsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateTerms&ConditionsRequest $request)
	{
		$terms&conditions = Terms&Conditions::findOrFail($id);

        

		$terms&conditions->update($request->all());

		return redirect()->route(config('quickadmin.route').'.terms&conditions.index');
	}

	/**
	 * Remove the specified terms&conditions from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Terms&Conditions::destroy($id);

		return redirect()->route(config('quickadmin.route').'.terms&conditions.index');
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
            Terms&Conditions::destroy($toDelete);
        } else {
            Terms&Conditions::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.terms&conditions.index');
    }

}
