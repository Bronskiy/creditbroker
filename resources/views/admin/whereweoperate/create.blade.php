@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_create-add_new') }}</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::open(array('files' => true, 'route' => config('quickadmin.route').'.whereweoperate.store', 'id' => 'form-with-validation', 'class' => 'form-horizontal')) !!}

<div class="form-group">
    {!! Form::label('mainimage_id', 'Top Image', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('mainimage_id', $mainimage, old('mainimage_id'), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('top_text', 'Top Text', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('top_text', old('top_text'), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('map_image_1', 'Map Image 1', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('map_image_1') !!}
        {!! Form::hidden('map_image_1_w', 4096) !!}
        {!! Form::hidden('map_image_1_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('map_text_1', 'Map Text 1', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('map_text_1', old('map_text_1'), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('map_image_2', 'Map Image 2', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('map_image_2') !!}
        {!! Form::hidden('map_image_2_w', 4096) !!}
        {!! Form::hidden('map_image_2_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('map_text_2', 'Map Text 2', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('map_text_2', old('map_text_2'), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('main_title', 'Main Title', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('main_title', old('main_title'), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('state_image_1', 'State Image 1', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('state_image_1') !!}
        {!! Form::hidden('state_image_1_w', 4096) !!}
        {!! Form::hidden('state_image_1_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('state_text_1', 'State Text 1', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('state_text_1', old('state_text_1'), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('state_image_2', 'State Image 2', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('state_image_2') !!}
        {!! Form::hidden('state_image_2_w', 4096) !!}
        {!! Form::hidden('state_image_2_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('state_text_2', 'State Text 2', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('state_text_2', old('state_text_2'), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('state_image_3', 'State Image 3', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('state_image_3') !!}
        {!! Form::hidden('state_image_3_w', 4096) !!}
        {!! Form::hidden('state_image_3_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('state_text_3', 'State Text 3', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('state_text_3', old('state_text_3'), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('state_image_4', 'State Image 4', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('state_image_4') !!}
        {!! Form::hidden('state_image_4_w', 4096) !!}
        {!! Form::hidden('state_image_4_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('state_text_4', 'State Text 4', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('state_text_4', old('state_text_4'), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('state_image_5', 'State Image 5', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('state_image_5') !!}
        {!! Form::hidden('state_image_5_w', 4096) !!}
        {!! Form::hidden('state_image_5_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('state_text_5', 'State Text 5', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('state_text_5', old('state_text_5'), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('state_image_6', 'State Image 6', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('state_image_6') !!}
        {!! Form::hidden('state_image_6_w', 4096) !!}
        {!! Form::hidden('state_image_6_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('state_text_6', 'State Text 6', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('state_text_6', old('state_text_6'), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('state_image_7', 'State Image 7', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('state_image_7') !!}
        {!! Form::hidden('state_image_7_w', 4096) !!}
        {!! Form::hidden('state_image_7_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('state_text_7', 'State Text 7', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('state_text_7', old('state_text_7'), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('state_image_8', 'State Image 8', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('state_image_8') !!}
        {!! Form::hidden('state_image_8_w', 4096) !!}
        {!! Form::hidden('state_image_8_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('state_text_8', 'State Text 8', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('state_text_8', old('state_text_8'), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('bottom_section', 'Bottom Section', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('bottom_section', old('bottom_section'), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('seo_id', 'SEO', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('seo_id', $seo, old('seo_id'), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit( trans('quickadmin::templates.templates-view_create-create') , array('class' => 'btn btn-primary')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection