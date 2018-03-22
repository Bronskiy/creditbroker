<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Posts;
use App\MainImage;
use App\Categories;

class NewsController extends Controller
{
  public function getData($name = "default")
  {
    // $data['PostsData'] = Posts::all();
    if ($name == "default") {
      $data['TopImage'] = MainImage::find(5);
      $data['PostsData'] = Posts::orderBy('post_date', 'asc')->get();
      return view('pages.news',$data);
    } else {
      $data['PostsData'] = Posts::where('post_slug', $name)->first();
      $data['Related'] = Posts::where('categories_id', $data['PostsData']['categories_id'])
      ->where('id', '!=', $data['PostsData']['id'])
      ->orderBy('post_date', 'asc')
      ->get();
      return view('pages.newsDetail',$data);
    }
  }
  public function getCategoryData($name = "default")
  {
    if ($name == "default") {
      abort(404);
    } else {
      $categories = Categories::where('cat_slug', $name)->first();
      if ($categories == '') {
        abort(404);
      }else {
        $data['Category'] = $categories;
        $data['PostsData'] = Posts::where('categories_id', $categories['id'])
        ->orderBy('post_date', 'asc')
        ->get();
        return view('pages.newsCategory',$data);
      }
    }
  }

  public function search()
  {
    $name = Input::get('keyword');
    if ($name) {
      $data['Keyword'] = $name;
      $data['PostsData'] = Posts::where('post_title', 'LIKE', "%$name%")
      ->orWhere('post_text', 'LIKE', "%$name%")
      ->get();
      return view('pages.search',$data);
    } else {
      abort(404);
    }

  }

}
