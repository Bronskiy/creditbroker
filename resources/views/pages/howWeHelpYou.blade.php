@extends('layouts.default')

@if ( ! $HowWeHelpYouData->isEmpty() )
@foreach ($HowWeHelpYouData as $value)

@section('meta_title', $value->seo->meta_title)
@section('meta_keywords', $value->seo->meta_keywords)
@section('meta_description', $value->seo->meta_description)
@section('content')

<section id="home-section" class="d-flex align-items-center buyers-agent" style="background:#fff url('{{ asset('uploads') . '/'.  $value->mainimage->main_image }}') no-repeat; background-size: 100% auto;">
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
  </div>
</section>

<section id="services" class="gray-container custom-list-style">
  <div class="container">
    <div class="border-heading pb-5 mb-5">
      {!! $value->main_text !!}
    </div>
    <div class="row">
      <div class="col-sm-12 col-lg-3">
        @if($value->side_image_desktop != '')<img class="disappear-on-mobile" src="{{ asset('uploads') . '/'.  $value->side_image_desktop }}">@endif
      </div>
      <div class="col-sm-12 col-lg-9">
        <div class="item-block-1">
          @if($value->item_image_1 != '')<img class="appear-on-mobile" src="{{ asset('uploads') . '/'.  $value->item_image_1 }}">@endif
          {!! isset($value->item_text_1) ? $value->item_text_1 : '' !!}
        </div>
        <div class="item-block-2">
          @if($value->item_image_2 != '')<img class="appear-on-mobile" src="{{ asset('uploads') . '/'.  $value->item_image_2 }}">@endif
          {!! isset($value->item_text_2) ? $value->item_text_2 : '' !!}
        </div>
        <div class="item-block-3">
          @if($value->item_image_3 != '')<img class="appear-on-mobile" src="{{ asset('uploads') . '/'.  $value->item_image_3 }}">@endif
          {!! isset($value->item_text_3) ? $value->item_text_3 : '' !!}
        </div>
        <div class="item-block-4">
          @if($value->item_image_4 != '')<img class="appear-on-mobile" src="{{ asset('uploads') . '/'.  $value->item_image_4 }}">@endif
          {!! isset($value->item_text_4) ? $value->item_text_4 : '' !!}
        </div>
        <div class="item-block-5">
          @if($value->item_image_5 != '')<img class="appear-on-mobile" src="{{ asset('uploads') . '/'.  $value->item_image_5 }}">@endif
          {!! isset($value->item_text_5) ? $value->item_text_5 : '' !!}
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
