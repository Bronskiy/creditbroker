@extends('layouts.default')
@section('meta_title', $Category->cat_name)

@section('content')
<section id="breadcrumbs">
  <div class="container d-flex">
    <h1 class="mb-1">{{ $Category->cat_name}}</h1>
    <div class="breadcrumb-box d-flex">
      <a href="/">Home</a>
      <span><i class="fa fa-angle-right"></i></span>
      <a href="/news">News</a>
      <span><i class="fa fa-angle-right"></i></span>
      <a>{{ $Category->cat_name}}</a>
    </div>
  </div>
</section>
<section id="blog-list-section" class="blog">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        @foreach ($PostsData as $value)
        <div class="blog-post">
          <div class="body">
            <h3 class="font-weight-bold mb-2"><a href="/news/{{ $value->post_slug }}" class="title-post">{{ $value->post_title }}</a></h3>
            <p class="post-description mb-0">
              {{ str_limit(strip_tags($value->post_text), $limit = 300, $end = '...') }}
            </p>
            <div class="info mt-3 mb-2 d-flex align-items-center">
              <div class="date">
                <i class="fa fa-calendar"></i>
                <span>{{ \DateTime::createFromFormat("Y-m-d", $value->post_date)->format("M jS, Y") }}</span>
              </div>
              <div class="tags">
                <a href="/category/{{ $value->categories->cat_slug }}">{{ $value->categories->cat_name }}</a>
              </div>
              <div class="read-more">
                <a href="/news/{{ $value->post_slug }}" class="d-flex align-items-center">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
@stop
