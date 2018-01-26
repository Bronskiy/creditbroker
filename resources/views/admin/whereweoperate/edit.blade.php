@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_edit-edit') }}</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::model($whereweoperate, array('files' => true, 'class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.whereweoperate.update', $whereweoperate->id))) !!}

<div class="form-group">
    {!! Form::label('mainimage_id', 'Top Image', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('mainimage_id', $mainimage, old('mainimage_id',$whereweoperate->mainimage_id), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('top_text', 'Top Text', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('top_text', old('top_text',$whereweoperate->top_text), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('map_item_1', 'Map Item 1', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('map_item_1') !!}
        {!! Form::hidden('map_item_1_w', 4096) !!}
        {!! Form::hidden('map_item_1_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('map_text_1', 'Map Text 1', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('map_text_1', old('map_text_1',$whereweoperate->map_text_1), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('map_item_2', 'Map Item 2', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('map_item_2') !!}
        {!! Form::hidden('map_item_2_w', 4096) !!}
        {!! Form::hidden('map_item_2_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('map_text_2', 'Map Text 2', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('map_text_2', old('map_text_2',$whereweoperate->map_text_2), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('map_item_3', 'Map Item 3', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('map_item_3') !!}
        {!! Form::hidden('map_item_3_w', 4096) !!}
        {!! Form::hidden('map_item_3_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('map_text_3', 'Map Text 3', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('map_text_3', old('map_text_3',$whereweoperate->map_text_3), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('map_item_4', 'Map Item 4', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('map_item_4') !!}
        {!! Form::hidden('map_item_4_w', 4096) !!}
        {!! Form::hidden('map_item_4_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('map_text_4', 'Map Text 4', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('map_text_4', old('map_text_4',$whereweoperate->map_text_4), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('map_item_5', 'Map Item 5', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('map_item_5') !!}
        {!! Form::hidden('map_item_5_w', 4096) !!}
        {!! Form::hidden('map_item_5_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('map_text_5', 'Map Text 5', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('map_text_5', old('map_text_5',$whereweoperate->map_text_5), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('map_item_6', 'Map Item 6', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('map_item_6') !!}
        {!! Form::hidden('map_item_6_w', 4096) !!}
        {!! Form::hidden('map_item_6_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('map_text_6', 'Map Text 6', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('map_text_6', old('map_text_6',$whereweoperate->map_text_6), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('map_item_7', 'Map Item 7', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('map_item_7') !!}
        {!! Form::hidden('map_item_7_w', 4096) !!}
        {!! Form::hidden('map_item_7_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('map_text_7', 'Map Text 7', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('map_text_7', old('map_text_7',$whereweoperate->map_text_7), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('map_item_8', 'Map Item 8', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('map_item_8') !!}
        {!! Form::hidden('map_item_8_w', 4096) !!}
        {!! Form::hidden('map_item_8_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('map_text_8', 'Map Text 8', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('map_text_8', old('map_text_8',$whereweoperate->map_text_8), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('map_item_9', 'Map Item 9', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('map_item_9') !!}
        {!! Form::hidden('map_item_9_w', 4096) !!}
        {!! Form::hidden('map_item_9_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('map_text_9', 'Map Text 9', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('map_text_9', old('map_text_9',$whereweoperate->map_text_9), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('map_item_10', 'Map Item 10', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('map_item_10') !!}
        {!! Form::hidden('map_item_10_w', 4096) !!}
        {!! Form::hidden('map_item_10_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('map_text_10', 'Map Text 10', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('map_text_10', old('map_text_10',$whereweoperate->map_text_10), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('bottom_section', 'Bottom Section', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('bottom_section', old('bottom_section',$whereweoperate->bottom_section), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('seo_id', 'SEO', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('seo_id', $seo, old('seo_id',$whereweoperate->seo_id), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.whereweoperate.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection