@extends('layouts.default')

@if ( ! $WhereWeOperateData->isEmpty() )
@foreach ($WhereWeOperateData as $value)

@section('meta_title', $value->seo->meta_title)
@section('meta_keywords', $value->seo->meta_keywords)
@section('meta_description', $value->seo->meta_description)
@section('content')

<section id="home-section" class="d-flex align-items-center property-management" style="background:#fff url('{{ asset('uploads') . '/'.  $value->mainimage->main_image }}') no-repeat; background-size: 100% auto;">
  <div class="container text-wrapper d-flex flex-column justify-content-center">
    <p class="sub-text">Complete Lending Solutions E<span class="cont-underline">st</span>. 2002</p>
    <div class="col-md-8 offset-md-4">
      {!! isset($value->mainimage->main_text) ? $value->mainimage->main_text : '' !!}
    </div>
    <a href="{{ $value->mainimage->link_url }}" class="slide-button">{{ $value->mainimage->link_title }} <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
  </div>
</section>

<section id="services">
  <div class="container">
    {!! $value->top_text !!}
    <div class="row">
      <div class="col-sm">
        @if($value->map_image_1 != '')<img src="{{ asset('uploads') . '/'.  $value->map_image_1 }}">@endif
        {!! isset($value->map_text_1) ? $value->map_text_1 : '' !!}
      </div>
      <div class="col-sm">
        @if($value->map_image_2 != '')<img src="{{ asset('uploads') . '/'.  $value->map_image_2 }}">@endif
        {!! isset($value->map_text_2) ? $value->map_text_2 : '' !!}
      </div>
    </div>
  </div>
</section>

<section id="services" class="gray-container fixed-image-height custom-list-style">
  <div class="container">
    <div class="border-heading pb-3 mb-5">
      {!! $value->main_title !!}
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-3">
        @if($value->state_image_1 != '')<img src="{{ asset('uploads') . '/'.  $value->state_image_1 }}">@endif
        {!! isset($value->state_text_1) ? $value->state_text_1 : '' !!}
      </div>
      <div class="col-sm-12 col-md-9">
        <div class="row mb-5">
          <div class="col-sm-12 col-md-4">
            @if($value->state_image_2 != '')<img src="{{ asset('uploads') . '/'.  $value->state_image_2 }}">@endif
            {!! isset($value->state_text_2) ? $value->state_text_2 : '' !!}
          </div>
          <div class="col-sm-12 col-md-4">
            @if($value->state_image_3 != '')<img src="{{ asset('uploads') . '/'.  $value->state_image_3 }}">@endif
            {!! isset($value->state_text_3) ? $value->state_text_3 : '' !!}
          </div>
          <div class="col-sm-12 col-md-4">
            @if($value->state_image_4 != '')<img src="{{ asset('uploads') . '/'.  $value->state_image_4 }}">@endif
            {!! isset($value->state_text_4) ? $value->state_text_4 : '' !!}
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-sm-12 col-md-4">
            @if($value->state_image_5 != '')<img src="{{ asset('uploads') . '/'.  $value->state_image_5 }}">@endif
            {!! isset($value->state_text_5) ? $value->state_text_5 : '' !!}
          </div>
          <div class="col-sm-12 col-md-4">
            @if($value->state_image_6 != '')<img src="{{ asset('uploads') . '/'.  $value->state_image_6 }}">@endif
            {!! isset($value->state_text_6) ? $value->state_text_6 : '' !!}
          </div>
          <div class="col-sm-12 col-md-4">
            @if($value->state_image_7 != '')<img src="{{ asset('uploads') . '/'.  $value->state_image_7 }}">@endif
            {!! isset($value->state_text_7) ? $value->state_text_7 : '' !!}
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-4">
            @if($value->state_image_8 != '')<img src="{{ asset('uploads') . '/'.  $value->state_image_8 }}">@endif
            {!! isset($value->state_text_8) ? $value->state_text_8 : '' !!}
          </div>
        </div>
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
