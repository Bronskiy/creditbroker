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

{!! Form::model($howwehelpyou, array('files' => true, 'class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.howwehelpyou.update', $howwehelpyou->id))) !!}

<div class="form-group">
    {!! Form::label('mainimage_id', 'Top Image', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('mainimage_id', $mainimage, old('mainimage_id',$howwehelpyou->mainimage_id), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('top_text', 'Top Text', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('top_text', old('top_text',$howwehelpyou->top_text), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('main_text', 'Main Text', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('main_text', old('main_text',$howwehelpyou->main_text), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('side_image_desktop', 'Side Image Desktop', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('side_image_desktop') !!}
        {!! Form::hidden('side_image_desktop_w', 4096) !!}
        {!! Form::hidden('side_image_desktop_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('item_image_1', 'Item Image 1', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('item_image_1') !!}
        {!! Form::hidden('item_image_1_w', 4096) !!}
        {!! Form::hidden('item_image_1_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('item_text_1', 'Item Text 1', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('item_text_1', old('item_text_1',$howwehelpyou->item_text_1), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('item_image_2', 'Item Image 2', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('item_image_2') !!}
        {!! Form::hidden('item_image_2_w', 4096) !!}
        {!! Form::hidden('item_image_2_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('item_text_2', 'Item Text 2', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('item_text_2', old('item_text_2',$howwehelpyou->item_text_2), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('item_image_3', 'Item Image 3', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('item_image_3') !!}
        {!! Form::hidden('item_image_3_w', 4096) !!}
        {!! Form::hidden('item_image_3_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('item_text_3', 'Item Text 3', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('item_text_3', old('item_text_3',$howwehelpyou->item_text_3), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('item_image_4', 'Item Image 4', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('item_image_4') !!}
        {!! Form::hidden('item_image_4_w', 4096) !!}
        {!! Form::hidden('item_image_4_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('item_text_4', 'Item Text 4', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('item_text_4', old('item_text_4',$howwehelpyou->item_text_4), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('item_image_5', 'Item Image 5', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('item_image_5') !!}
        {!! Form::hidden('item_image_5_w', 4096) !!}
        {!! Form::hidden('item_image_5_h', 4096) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('item_text_5', 'Item Text 5', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('item_text_5', old('item_text_5',$howwehelpyou->item_text_5), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('bottom_section', 'Bottom Text', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('bottom_section', old('bottom_section',$howwehelpyou->bottom_section), array('class'=>'form-control ckeditor')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('seo_id', 'SEO', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('seo_id', $seo, old('seo_id',$howwehelpyou->seo_id), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.howwehelpyou.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection