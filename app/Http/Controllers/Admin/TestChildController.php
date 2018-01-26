<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\TestChild;
use App\Http\Requests\CreateTestChildRequest;
use App\Http\Requests\UpdateTestChildRequest;
use Illuminate\Http\Request;



class TestChildController extends Controller {

	/**
	 * Display a listing of testchild
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $testchild = TestChild::all();

		return view('admin.testchild.index', compact('testchild'));
	}

	/**
	 * Show the form for creating a new testchild
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.testchild.create');
	}

	/**
	 * Store a newly created testchild in storage.
	 *
     * @param CreateTestChildRequest|Request $request
	 */
	public function store(CreateTestChildRequest $request)
	{
	    
		TestChild::create($request->all());

		return redirect()->route(config('quickadmin.route').'.testchild.index');
	}

	/**
	 * Show the form for editing the specified testchild.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$testchild = TestChild::find($id);
	    
	    
		return view('admin.testchild.edit', compact('testchild'));
	}

	/**
	 * Update the specified testchild in storage.
     * @param UpdateTestChildRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateTestChildRequest $request)
	{
		$testchild = TestChild::findOrFail($id);

        

		$testchild->update($request->all());

		return redirect()->route(config('quickadmin.route').'.testchild.index');
	}

	/**
	 * Remove the specified testchild from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		TestChild::destroy($id);

		return redirect()->route(config('quickadmin.route').'.testchild.index');
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
            TestChild::destroy($toDelete);
        } else {
            TestChild::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.testchild.index');
    }

}
