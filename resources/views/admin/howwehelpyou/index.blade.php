@extends('admin.layouts.master')

@section('content')

<p>{!! link_to_route(config('quickadmin.route').'.howwehelpyou.create', trans('quickadmin::templates.templates-view_index-add_new') , null, array('class' => 'btn btn-success')) !!}</p>

@if ($howwehelpyou->count())
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
<th>Side Image Desktop</th>
<th>1 Item Image</th>
<th>2 Item Image</th>
<th>3 Item Image</th>
<th>4 Item Image</th>
<th>5 Item Image</th>

                        <th>&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($howwehelpyou as $row)
                        <tr>
                            <td>
                                {!! Form::checkbox('del-'.$row->id,1,false,['class' => 'single','data-id'=> $row->id]) !!}
                            </td>
                            <td>{{ isset($row->mainimage->main_text) ? $row->mainimage->main_text : '' }}</td>
<td>@if($row->side_image_desktop != '')<img src="{{ asset('uploads/thumb') . '/'.  $row->side_image_desktop }}">@endif</td>
<td>@if($row->item_image_1 != '')<img src="{{ asset('uploads/thumb') . '/'.  $row->item_image_1 }}">@endif</td>
<td>@if($row->item_image_2 != '')<img src="{{ asset('uploads/thumb') . '/'.  $row->item_image_2 }}">@endif</td>
<td>@if($row->item_image_3 != '')<img src="{{ asset('uploads/thumb') . '/'.  $row->item_image_3 }}">@endif</td>
<td>@if($row->item_image_4 != '')<img src="{{ asset('uploads/thumb') . '/'.  $row->item_image_4 }}">@endif</td>
<td>@if($row->item_image_5 != '')<img src="{{ asset('uploads/thumb') . '/'.  $row->item_image_5 }}">@endif</td>

                            <td>
                                {!! link_to_route(config('quickadmin.route').'.howwehelpyou.edit', trans('quickadmin::templates.templates-view_index-edit'), array($row->id), array('class' => 'btn btn-xs btn-info')) !!}
                                {!! Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'onsubmit' => "return confirm('".trans("quickadmin::templates.templates-view_index-are_you_sure")."');",  'route' => array(config('quickadmin.route').'.howwehelpyou.destroy', $row->id))) !!}
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
            {!! Form::open(['route' => config('quickadmin.route').'.howwehelpyou.massDelete', 'method' => 'post', 'id' => 'massDelete']) !!}
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
