@extends('layouts.default')

@if ( ! $HomePageData->isEmpty() )
@foreach ($HomePageData as $value)

@section('meta_title', $value->seo->meta_title)
@section('meta_keywords', $value->seo->meta_keywords)
@section('meta_description', $value->seo->meta_description)
@section('content')

<section id="home-section" class="d-flex align-items-center" style="background:#fff url('{{ asset('uploads') . '/'.  $value->mainimage->main_image }}') no-repeat; background-size: 100% auto;">
  <div class="container text-wrapper d-flex flex-column justify-content-center">
    <p class="sub-text">Complete Lending Solutions E<span class="cont-underline">st</span>. 2002</p>
    <div class="col-md-8 offset-md-4">
      {!! isset($value->mainimage->main_text) ? $value->mainimage->main_text : '' !!}
    </div>
    <a href="{{ $value->mainimage->link_url }}" class="slide-button">{{ $value->mainimage->link_title }} <i class="fa fa-chevron-right" aria-hidden="true"></i>
</a>
  </div>
</section>

<section id="services">
  <div class="container">
    {!! $value->top_text !!}
  </div>
</section>
<section id="services" class="gray-container custom-list-style">
  <div class="container">
    <div class="border-heading pb-5 mb-5">
      {!! $value->main_title !!}
    </div>
    <div class="row">
      <div class="col-sm">
        {!! $value->first_column !!}
      </div>
      <div class="col-sm">
        {!! $value->second_column !!}
      </div>
      <div class="col-sm">
        {!! $value->third_column !!}
      </div>
    </div>
  </div>
</section>

<section id="send-newsletter">
  <div class="container">
    <div class="row send-row">
      <div class="col-md d-flex flex-column justify-content-center">
        {!! $value->bottom_section !!}
      </div>
    </div>
  </div>
</section>
@endforeach
@endif

@stop
