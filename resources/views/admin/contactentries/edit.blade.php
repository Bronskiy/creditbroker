@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>View</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::model($contactentries, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.contactentries.update', $contactentries->id))) !!}

<div class="form-group">
    {!! Form::label('contact_name', 'Name', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('contact_name', old('contact_name',$contactentries->contact_name), array('class'=>'form-control')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('contact_phone', 'Phone', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('contact_phone', old('contact_phone',$contactentries->contact_phone), array('class'=>'form-control')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('contact_email', 'Email', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::email('contact_email', old('contact_email',$contactentries->contact_email), array('class'=>'form-control')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('contact_enquiry', 'Enquiry', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('contact_enquiry', old('contact_enquiry',$contactentries->contact_enquiry), array('class'=>'form-control')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('contact_ip', 'IP address', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('contact_ip', old('contact_ip',$contactentries->contact_ip), array('class'=>'form-control')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('contact_confirm', 'No fraud', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::hidden('contact_confirm','') !!}
        {!! Form::checkbox('contact_confirm', 1, $contactentries->contact_confirm == 1) !!}

    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! link_to_route(config('quickadmin.route').'.contactentries.index', 'Back', null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection
