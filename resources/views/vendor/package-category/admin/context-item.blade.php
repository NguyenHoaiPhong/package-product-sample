@if(!empty($items) && (!$items->isEmpty()) )
<?php
    $withs = [
        'order' => '5%',
        'name' => '20%',
        'ref' => '20%',
        'key' => '20%',
        'status' => '5%',
        'updated_at' => '15%',
        'operations' => '10%',
        'delete' => '5%',
    ];

    global $counter;
    $nav = $items->toArray();
    $counter = ($nav['current_page'] - 1) * $nav['per_page'] + 1;
?>
<caption>
    @if($nav['total'] == 1)
        {!! trans($plang_admin.'.descriptions.counter', ['number' => $nav['total']]) !!}
    @else
        {!! trans($plang_admin.'.descriptions.counters', ['number' => $nav['total']]) !!}
    @endif
</caption>

<div class="table-responsive" style="width: 950px">
<table class="table table-hover">

    <thead>
        <tr style="height: 50px;">

            <!--ORDER-->
            <th style='width:{{ $withs['order'] }}'>
                {{ trans($plang_admin.'.columns.order') }}
            </th>

            <!-- NAME -->
            <?php $name = 'context_name' ?>

            <th class="hidden-xs" style='width:{{ $withs['name'] }}'>{!! trans($plang_admin.'.columns.context-name') !!}
                <a href='{!! $sorting["url"][$name] !!}' class='tb-id' data-order='asc'>
                    @if($sorting['items'][$name] == 'asc')
                        <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>
                    @elseif($sorting['items'][$name] == 'desc')
                        <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>
                    @else
                        <i class="fa fa-sort-desc" aria-hidden="true"></i>
                    @endif
                </a>
            </th>

            <!--REF-->
            <?php $name = 'context_ref' ?>

            <th class="hidden-xs" style='width:{{ $withs['name'] }}'>{!! trans($plang_admin.'.columns.context-ref') !!}
                <a href='{!! $sorting["url"][$name] !!}' class='tb-id' data-order='asc'>
                    @if($sorting['items'][$name] == 'asc')
                        <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>
                    @elseif($sorting['items'][$name] == 'desc')
                        <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>
                    @else
                        <i class="fa fa-sort-desc" aria-hidden="true"></i>
                    @endif
                </a>
            </th>

            <!--STATUS-->
            <?php $name = 'context_status' ?>

            <th class="hidden-xs" style='width:{{ $withs['name'] }}'>{!! trans($plang_admin.'.columns.context-status') !!}
                <a href='{!! $sorting["url"][$name] !!}' class='tb-id' data-order='asc'>
                    @if($sorting['items'][$name] == 'asc')
                        <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>
                    @elseif($sorting['items'][$name] == 'desc')
                        <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>
                    @else
                        <i class="fa fa-sort-desc" aria-hidden="true"></i>
                    @endif
                </a>
            </th>

            <!-- UPDATED AT -->
            <?php $name = 'updated_at' ?>

            <th class="hidden-xs" style='width:{{ $withs['updated_at'] }}'>{!! trans($plang_admin.'.columns.updated_at') !!}
                <a href='{!! $sorting["url"][$name] !!}' class='tb-id' data-order='asc'>
                    @if($sorting['items'][$name] == 'asc')
                        <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>
                    @elseif($sorting['items'][$name] == 'desc')
                        <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>
                    @else
                        <i class="fa fa-sort-desc" aria-hidden="true"></i>
                    @endif
                </a>
            </th>

             <!--KEY-->
            <th style='width:{{ $withs['key'] }}'>
                {{ trans($plang_admin.'.columns.key') }}
            </th>

            <!--OPERATIONS-->
            <th style='width:{{ $withs['operations'] }}'>
                <span class='lb-delete-all'>
                    {{ trans($plang_admin.'.columns.operations') }}
                </span>

                {!! Form::submit(trans($plang_admin.'.buttons.delete-in-trash'), array(
                                                                            "class"=>"btn btn-danger pull-right delete btn-delete-all del-trash",
                                                                            "title"=> trans($plang_admin.'.hint.delete-in-trash'),
                                                                            'name'=>'del-trash'))
                !!}
                {!! Form::submit(trans($plang_admin.'.buttons.delete-forever'), array(
                                                                            "class"=>"btn btn-warning pull-right delete btn-delete-all del-forever",
                                                                            "title"=> trans($plang_admin.'.hint.delete-forever'),
                                                                            'name'=>'del-forever'))
                !!}
            </th>

            <!--DELETE-->
            <th style='width:{{ $withs['delete'] }}'>
                <span class="del-checkbox pull-right">
                    <input type="checkbox" id="selecctall" />
                    <label for="del-checkbox"></label>
                </span>
            </th>

        </tr>

    </thead>

    <tbody>
        @foreach($items as $item)

            <tr>
                <!--ORDER-->
                <td> <?php echo $counter; $counter++ ?> </td>

                <!--REF-->
                <td>
                    {!! $item->context_name !!}
                </td>

                <!--REF-->
                <td>
                    <a href="{!! URL::route('categories.list', ['_key' => $item->context_key]) !!}">
                        {!! $item->context_ref !!}
                    </a>
                </td>

                <!--STATUS-->
                <td style="text-align: center;">

                    <?php $status = config('package-category.status'); ?>
                    @if($item->context_status && (isset($status['list'][$item->context_status])))
                        <i class="fa fa-circle" style="color:{!! $status['color'][$item->context_status] !!}" title='{!! $status["list"][$item->context_status] !!}'></i>
                    @else
                    <i class="fa fa-circle-o red" title='{!! trans($plang_admin.".labels.unknown") !!}'></i>
                    @endif
                </td>

                <!--UPDATED AT-->
                <td> {!! date('Y-m-d', strtotime($item->updated_at) ) !!} </td>


                <!--KEY-->
                <td> {!! $item->context_key !!} </td>


                <!--OPERATOR-->
                <td>
                    <!--edit-->
                    <a href="{!! URL::route('contexts.edit', ['id' => $item->id,
                                                                '_token' => csrf_token()
                                                               ])
                            !!}">
                        <i class="fa fa-edit f-tb-icon"></i>
                    </a>

                    <!--delete-->
                    <a href="{!! URL::route('contexts.delete',['id' => $item->id,
                                                                '_token' => csrf_token(),
                                                                 ])
                             !!}"
                       class="margin-left-5 delete">
                        <i class="fa fa-trash-o f-tb-icon"></i>
                    </a>

                    <!--copy-->
                    <a href="{!! URL::route('contexts.edit',['id' => $item->id,
                                                            'cid' => $item->id,
                                                            '_token' => csrf_token(),
                                                            ])
                             !!}"
                        class="margin-left-5 delete">
                        <i class="fa fa-files-o f-tb-icon" aria-hidden="true"></i>
                    </a>

                </td>

                <!--DELETE-->
                <td>
                    <span class='box-item pull-right'>
                        <input type="checkbox" id="<?php echo $item->id ?>" name="ids[]" value="{!! $item->id !!}">
                        <label for="box-item"></label>
                    </span>
                </td>

            </tr>
        @endforeach

    </tbody>

</table>
</div>
<div class="paginator">
    {!! $items->appends($request->except(['page']) )->render() !!}
</div>
@else
    <!--SEARCH RESULT MESSAGE-->
    <span class="text-warning">
        <h5>
            {{ trans($plang_admin.'.descriptions.not-found') }}
        </h5>
    </span>
    <!--/SEARCH RESULT MESSAGE-->
@endif

@section('footer_scripts')
    @parent
    {!! HTML::script('packages/foostart/js/form-table.js')  !!}
@stop