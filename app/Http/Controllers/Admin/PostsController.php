<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Posts;
use App\Http\Requests\CreatePostsRequest;
use App\Http\Requests\UpdatePostsRequest;
use Illuminate\Http\Request;

use App\Categories;


class PostsController extends Controller {

	/**
	 * Display a listing of posts
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $posts = Posts::with("categories")->get();

		return view('admin.posts.index', compact('posts'));
	}

	/**
	 * Show the form for creating a new posts
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $categories = Categories::pluck("cat_name", "id")->prepend('Please select', 0);

	    
	    return view('admin.posts.create', compact("categories"));
	}

	/**
	 * Store a newly created posts in storage.
	 *
     * @param CreatePostsRequest|Request $request
	 */
	public function store(CreatePostsRequest $request)
	{
	    
		Posts::create($request->all());

		return redirect()->route(config('quickadmin.route').'.posts.index');
	}

	/**
	 * Show the form for editing the specified posts.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$posts = Posts::find($id);
	    $categories = Categories::pluck("cat_name", "id")->prepend('Please select', 0);

	    
		return view('admin.posts.edit', compact('posts', "categories"));
	}

	/**
	 * Update the specified posts in storage.
     * @param UpdatePostsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdatePostsRequest $request)
	{
		$posts = Posts::findOrFail($id);

        

		$posts->update($request->all());

		return redirect()->route(config('quickadmin.route').'.posts.index');
	}

	/**
	 * Remove the specified posts from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Posts::destroy($id);

		return redirect()->route(config('quickadmin.route').'.posts.index');
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
            Posts::destroy($toDelete);
        } else {
            Posts::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.posts.index');
    }

}
