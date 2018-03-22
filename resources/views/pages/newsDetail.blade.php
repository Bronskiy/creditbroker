@extends('layouts.default')
@section('meta_title', $PostsData->post_title)

@section('content')
<section id="breadcrumbs">
  <div class="container d-flex">
    <h1 class="mb-1">{{ $PostsData->post_title }}</h1>
    <div class="breadcrumb-box d-flex">
      <a href="/">Home</a>
      <span><i class="fa fa-angle-right"></i></span>
      <a href="/news">News</a>
      <span><i class="fa fa-angle-right"></i></span>
      <a>{{ $PostsData->post_title }}</a>
    </div>
  </div>
</section>
<section id="blog-list-section" class="blog">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="blog-post">
          <div class="body">
            <h3 class="font-weight-bold mb-2"><a href="/news/{{ $PostsData->post_slug }}" class="title-post">{{ $PostsData->post_title }}</a></h3>
            <div class="post-description mb-0">
              {!! $PostsData->post_text !!}
            </div>
            <div class="info mt-3 mb-2 d-flex align-items-center">
              <div class="date">
                <i class="fa fa-calendar"></i>
                <span>{{ \DateTime::createFromFormat("Y-m-d", $PostsData->post_date)->format("M jS, Y") }}</span>
              </div>
              <div class="tags">
                <a href="/category/{{ $PostsData->categories->cat_slug }}">{{ $PostsData->categories->cat_name }}</a>
              </div>
            </div>
            <div class="share-block mt50 mb50 d-flex align-items-center">
              <div class="share-text">
                <p>Share This Story, Choose Your Platform!</p>
              </div>
              <div class="social-buttons">
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
              </div>
            </div>
            @if (!empty($Related))
            <h3 class="section-title">Related Posts</h3>
            <div class="row d-flex">
              @foreach ($Related as $value)
              <div class="col-lg-6 col-sm-12 latest-news d-flex flex-column">
                <div class="card-news d-flex">
                  <div class="info-box">
                    <div class="description">
                      <h5><a href="/news/{{ $value->post_slug }}">{{ $value->post_title }}</a></h5>
                      <p class="mb50">{{ str_limit(strip_tags($value->post_text), $limit = 300, $end = '...') }}</p>
                    </div>
                    <div class="footer-news d-flex align-items-center">
                      <i class="fa fa-calendar"></i>
                      <p class="mb-0 card-date">{{ \DateTime::createFromFormat("Y-m-d", $value->post_date)->format("M jS, Y") }}</p>
                      <a href="/news/{{ $value->post_slug }}" class="read-more d-flex align-items-center">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop
