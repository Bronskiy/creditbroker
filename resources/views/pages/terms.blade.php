@extends('layouts.default')
@section('meta_title', 'Terms & Conditions')
@section('meta_keywords', 'keywords')
@section('meta_description', 'meta desc')
@section('content')

<section id="breadcrumbs">
  <div class="container d-flex">
    <h1 class="mb-1">Terms & Conditions</h1>
    <div class="breadcrumb-box d-flex">
      <a href="/">Home</a>
      <span><i class="fa fa-angle-right"></i></span>
      <a>Terms & Conditions</a>
    </div>
  </div>
</section>
@if ( ! $TermsData->isEmpty() )
@foreach ($TermsData as $value)

<section id="services" class="terms">
  <div class="container">
    {!! $value->text !!}
  </div>
</section>

@endforeach
@endif

@stop
