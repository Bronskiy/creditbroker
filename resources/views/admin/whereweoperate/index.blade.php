@extends('admin.layouts.master')

@section('content')

<p>{!! link_to_route(config('quickadmin.route').'.whereweoperate.create', trans('quickadmin::templates.templates-view_index-add_new') , null, array('class' => 'btn btn-success')) !!}</p>

@if ($whereweoperate->count())
    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">{{ trans('quickadmin::templates.templates-view_index-list') }}</div>
        </div>
        <div class="portlet-body">
            <table class="table table-striped table-hover table-responsive datatable" id="datatable">
                <thead>
                    <tr>
                        <th>
                            {!! Form::checkbox('delete_all',1,false,['class' => 'mass']) !!}
                        </th>
                        <th>Top Image</th>
<th>Map Image 1</th>
<th>Map Image 2</th>
<th>State Image 1</th>
<th>State Image 2</th>
<th>State Image 3</th>
<th>State Image 4</th>
<th>State Image 5</th>
<th>State Image 6</th>
<th>State Image 7</th>
<th>State Image 8</th>
<th>SEO</th>

                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($whereweoperate as $row)
                        <tr>
                            <td>
                                {!! Form::checkbox('del-'.$row->id,1,false,['class' => 'single','data-id'=> $row->id]) !!}
                            </td>
                            <td>{{ isset($row->mainimage->link_title) ? $row->mainimage->link_title : '' }}</td>
<td>@if($row->map_image_1 != '')<img src="{{ asset('uploads/thumb') . '/'.  $row->map_image_1 }}">@endif</td>
<td>@if($row->map_image_2 != '')<img src="{{ asset('uploads/thumb') . '/'.  $row->map_image_2 }}">@endif</td>
<td>@if($row->state_image_1 != '')<img src="{{ asset('uploads/thumb') . '/'.  $row->state_image_1 }}">@endif</td>
<td>@if($row->state_image_2 != '')<img src="{{ asset('uploads/thumb') . '/'.  $row->state_image_2 }}">@endif</td>
<td>@if($row->state_image_3 != '')<img src="{{ asset('uploads/thumb') . '/'.  $row->state_image_3 }}">@endif</td>
<td>@if($row->state_image_4 != '')<img src="{{ asset('uploads/thumb') . '/'.  $row->state_image_4 }}">@endif</td>
<td>@if($row->state_image_5 != '')<img src="{{ asset('uploads/thumb') . '/'.  $row->state_image_5 }}">@endif</td>
<td>@if($row->state_image_6 != '')<img src="{{ asset('uploads/thumb') . '/'.  $row->state_image_6 }}">@endif</td>
<td>@if($row->state_image_7 != '')<img src="{{ asset('uploads/thumb') . '/'.  $row->state_image_7 }}">@endif</td>
<td>@if($row->state_image_8 != '')<img src="{{ asset('uploads/thumb') . '/'.  $row->state_image_8 }}">@endif</td>
<td>{{ isset($row->seo->meta_title) ? $row->seo->meta_title : '' }}</td>

                            <td>
                                {!! link_to_route(config('quickadmin.route').'.whereweoperate.edit', trans('quickadmin::templates.templates-view_index-edit'), array($row->id), array('class' => 'btn btn-xs btn-info')) !!}
                                {!! Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'onsubmit' => "return confirm('".trans("quickadmin::templates.templates-view_index-are_you_sure")."');",  'route' => array(config('quickadmin.route').'.whereweoperate.destroy', $row->id))) !!}
                                {!! Form::submit(trans('quickadmin::templates.templates-view_index-delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-xs-12">
                    <button class="btn btn-danger" id="delete">
                        {{ trans('quickadmin::templates.templates-view_index-delete_checked') }}
                    </button>
                </div>
            </div>
            {!! Form::open(['route' => config('quickadmin.route').'.whereweoperate.massDelete', 'method' => 'post', 'id' => 'massDelete']) !!}
                <input type="hidden" id="send" name="toDelete">
            {!! Form::close() !!}
        </div>
	</div>
@else
    {{ trans('quickadmin::templates.templates-view_index-no_entries_found') }}
@endif

@endsection

@section('javascript')
    <script>
        $(document).ready(function () {
            $('#delete').click(function () {
                if (window.confirm('{{ trans('quickadmin::templates.templates-view_index-are_you_sure') }}')) {
                    var send = $('#send');
                    var mass = $('.mass').is(":checked");
                    if (mass == true) {
                        send.val('mass');
                    } else {
                        var toDelete = [];
                        $('.single').each(function () {
                            if ($(this).is(":checked")) {
                                toDelete.push($(this).data('id'));
                            }
                        });
                        send.val(JSON.stringify(toDelete));
                    }
                    $('#massDelete').submit();
                }
            });
        });
    </script>
@stop