@extends('layouts.default')
@section('meta_title', 'News')

@section('content')

@if(isset($TopImage))
<section id="home-section" class="d-flex align-items-center news" style="background:#fff url('{{ asset('uploads') . '/'.  $TopImage->main_image }}') no-repeat; background-size: 100% auto;">
  <div class="container text-wrapper d-flex flex-column justify-content-center">
    <p class="sub-text">Complete Lending Solutions E<span class="cont-underline">st</span>. 2002</p>
    <div class="col-md-9 offset-md-3">
      {!! $TopImage->main_text !!}
    </div>
    <a href="{{ $TopImage->link_url }}" class="slide-button">{{ $TopImage->link_title }} <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
  </div>
</section>
@endif

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
