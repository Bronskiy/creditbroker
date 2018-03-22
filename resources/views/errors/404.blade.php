@extends('layouts.default')
@section('meta_title', '404')
@section('content')
<section id="breadcrumbs">
  <div class="container d-flex">
    <h1 class="mb-1">404</h1>
    <div class="breadcrumb-box d-flex">
      <a href="/">Home</a>
      <span><i class="fa fa-angle-right"></i></span>
      <a>404</a>
    </div>
  </div>
</section>
@if ( ! $Page404Data->isEmpty() )
@foreach ($Page404Data as $value)

<section id="services">
  <div class="container">
    <div class="row d-md-flex justify-content-md-center">
      <div class="col-md-12 info-col">
        <div class="text-box">
          {!! $value->error_404_titile !!}
        </div>
      </div>
    </div>
    <div class="row d-md-flex justify-content-md-center mt50 mb50">
      <div class="col-lg-6 col-md-10 info-col">
        <div class="text-box pl-sm-5 pr-sm-4 d-flex flex-column justify-content-center">
          {!! $value->google_search !!}
        </div>
      </div>
      <div class="col-lg-6 col-md-10 info-col">
        <div class="text-box pr-sm-5 pl-sm-4 d-flex flex-column justify-content-center">
          {!! $value->bing_search !!}
        </div>
      </div>
    </div>
    <div class="row d-md-flex justify-content-md-center">
      <div class="col-md-12 info-col">
        <div class="text-box">
          {!! $value->error_404_text !!}
        </div>
      </div>
    </div>
  </div>
</section>

@endforeach
@endif

@stop
