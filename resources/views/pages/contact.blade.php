@extends('layouts.default')

@if ( ! $GetInTouchData->isEmpty() )
@foreach ($GetInTouchData as $value)

@section('meta_title', $value->seo->meta_title)
@section('meta_keywords', $value->seo->meta_keywords)
@section('meta_description', $value->seo->meta_description)
@section('content')

<section id="home-section" class="d-flex align-items-center get-in-touch" style="background:#fff url('{{ asset('uploads') . '/'.  $value->mainimage->main_image }}') no-repeat; background-size: 100% auto;">
  <div class="container text-wrapper d-flex flex-column justify-content-center">
    <p class="sub-text">Complete Lending Solutions E<span class="cont-underline">st</span>. 2002</p>
    <div class="col-md-10 offset-md-2">
      {!! isset($value->mainimage->main_text) ? $value->mainimage->main_text : '' !!}
    </div>
    <a class="slide-button">{{ $value->mainimage->link_title }} </a>
  </div>
</section>

<section id="services">
  <div class="container">
    {!! $value->top_text !!}
    <div class="row d-flex justify-content-between mt50 mb50">
      <div class="col-lg">
        {!! $value->contacts !!}
      </div>
      <div class="col-lg">
        {!! $value->map !!}
      </div>
    </div>
    {!! $value->form_title !!}
    @if (count($errors) > 0)
    <div class="alert alert-danger">
      <strong>{{ trans('quickadmin::auth.whoops') }}</strong> {{ trans('quickadmin::auth.some_problems_with_input') }}
      <br><br>
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    {!! Form::open(array('url' => 'get-in-touch/store', 'id' => 'form-with-validation', 'class' => 'form-horizontal mt50')) !!}
    <div class="row-input">
      {!! Form::label('contact_name', 'Name', array('class'=>'control-label required-label')) !!}
      {!! Form::text('contact_name', old('contact_name'), array('class'=>'','required' => '','placeholder' => 'Please provide your first and last name')) !!}
    </div>
    <div class="row-input">
      {!! Form::label('contact_phone', 'Phone', array('class'=>'control-label required-label')) !!}
      {!! Form::text('contact_phone', old('contact_phone'), array('class'=>'','required' => '','placeholder' => 'Please provide your land line or mobile phone number')) !!}

    </div>
    <div class="row-input">
      {!! Form::label('contact_email', 'Email', array('class'=>'control-label required-label')) !!}
      {!! Form::email('contact_email', old('contact_email'), array('class'=>'','placeholder' => 'Please provide your email address')) !!}
    </div>
    <div class="row-input">
      {!! Form::label('contact_enquiry', 'Enquiry', array('class'=>'control-label')) !!}
      {!! Form::textarea('contact_enquiry', old('contact_enquiry'), array('class'=>'','placeholder' => 'We will follow up on your enquiry with a telephone call. Please let us know convenient times to call.')) !!}

    </div>
    <div class="row-input">
      <p>My IP address is {{ request()->ip() }}</p>
      <input type="hidden" name="contact_ip" value="{{ request()->ip() }} "id="contact_ip" >
    </div>

    <div class="row-input">
      {!! Form::hidden('contact_confirm','') !!}
      {!! Form::checkbox('contact_confirm', 1, false, array('class'=>'','required' => '')) !!}
      {!! Form::label('contact_confirm', 'I confirm that no identity theft or fraud has been committed.', array('class'=>' control-label required-label')) !!}
    </div>
    <div class="row-input mt25">
      <label for="g-recaptcha" class="control-label required-label">Captcha</label>
      {!! NoCaptcha::display() !!}
    </div>

    <div class="form-group mt25">
      {!! Form::submit( 'Submit Form' , array('class' => 'btn btn-primary')) !!}
    </div>

    {!! Form::close() !!}
  </div>

</section>

<section id="send-newsletter">
  <div class="container">
    <div class="row send-row">
      <div class="col-md d-flex flex-column justify-content-center">
        {!! $value->bottom_text !!}
      </div>
    </div>
  </div>
</section>
@endforeach
@endif

@stop
