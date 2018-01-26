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
    {!! Form::label('side_image_desktop', 'Side Image Desktop', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('side_image_desktop') !!}
        {!! Form::hidden('side_image_desktop_w', 4096) !!}
        {!! Form::hidden('side_image_desktop_h', 4096) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('item_image_1', '1 Item Image', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('item_image_1') !!}
        {!! Form::hidden('item_image_1_w', 4096) !!}
        {!! Form::hidden('item_image_1_h', 4096) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('1_item_text', '1 Item Text', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('1_item_text', old('1_item_text',$howwehelpyou->1_item_text), array('class'=>'form-control ckeditor')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('item_image_2', '2 Item Image', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('item_image_2') !!}
        {!! Form::hidden('item_image_2_w', 4096) !!}
        {!! Form::hidden('item_image_2_h', 4096) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('2_item_text', '2 Item Text', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('2_item_text', old('2_item_text',$howwehelpyou->2_item_text), array('class'=>'form-control ckeditor')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('item_image_3', '3 Item Image', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('item_image_3') !!}
        {!! Form::hidden('item_image_3_w', 4096) !!}
        {!! Form::hidden('item_image_3_h', 4096) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('3_item_text', '3 Item Text', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('3_item_text', old('3_item_text',$howwehelpyou->3_item_text), array('class'=>'form-control ckeditor')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('item_image_4', '4 Item Image', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('item_image_4') !!}
        {!! Form::hidden('item_image_4_w', 4096) !!}
        {!! Form::hidden('item_image_4_h', 4096) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('4_item_text', '4 Item Text', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('4_item_text', old('4_item_text',$howwehelpyou->4_item_text), array('class'=>'form-control ckeditor')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('item_image_5', '5 Item Image', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('item_image_5') !!}
        {!! Form::hidden('item_image_5_w', 4096) !!}
        {!! Form::hidden('item_image_5_h', 4096) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('5_item_text', '5 Item Text', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('5_item_text', old('5_item_text',$howwehelpyou->5_item_text), array('class'=>'form-control ckeditor')) !!}

    </div>
</div><div class="form-group">
    {!! Form::label('bottom_section', 'Bottom Section', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::textarea('bottom_section', old('bottom_section',$howwehelpyou->bottom_section), array('class'=>'form-control ckeditor')) !!}

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
