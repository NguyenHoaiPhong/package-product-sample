<!------------------------------------------------------------------------------
| List of elements in sample form
|------------------------------------------------------------------------------->

{!! Form::open(['route'=>['samples.post', 'id' => @$item->id],  'files'=>true, 'method' => 'post'])  !!}

    <!--BUTTONS-->
    <div class='btn-form'>
        <!-- DELETE BUTTON -->
        @if($item)
            <a href="{!! URL::route('samples.delete',['id' => @$item->id, '_token' => csrf_token()]) !!}"
            class="btn btn-danger pull-right margin-left-5 delete">
                {!! trans($plang_admin.'.buttons.delete') !!}
            </a>
        @endif
        <!-- DELETE BUTTON -->

        <!-- SAVE BUTTON -->
        {!! Form::submit(trans($plang_admin.'.buttons.save'), array("class"=>"btn btn-info pull-right ")) !!}
        <!-- /SAVE BUTTON -->
    </div>
    <!--/BUTTONS-->

    <!--TAB MENU-->
    <ul class="nav nav-tabs">
        <!--MENU 1-->
        <li class="active">
            <a data-toggle="tab" href="#menu_1">
                {!! trans($plang_admin.'.tabs.menu_1') !!}
            </a>
        </li>

        <!--MENU 2-->
        <li>
            <a data-toggle="tab" href="#menu_2">
                {!! trans($plang_admin.'.tabs.menu_2') !!}
            </a>
        </li>

        <!--MENU 3-->
        <li>
            <a data-toggle="tab" href="#menu_3">
                {!! trans($plang_admin.'.tabs.menu_3') !!}
            </a>
        </li>
    </ul>
    <!--/TAB MENU-->

    <!--TAB CONTENT-->
    <div class="tab-content">

        <!--MENU 1-->
        <div id="menu_1" class="tab-pane fade in active">

            <!--SAMPLE NAME-->
            @include('package-category::admin.partials.input_text', [
            'name' => 'sample_name',
            'label' => trans($plang_admin.'.labels.name'),
            'value' => @$item->sample_name,
            'description' => trans($plang_admin.'.descriptions.name'),
            'errors' => $errors,
            ])
            <!--/SAMPLE NAME-->

            <!-- LIST OF CATEGORIES -->
            @include('package-category::admin.partials.select_single', [
            'name' => 'category_id',
            'label' => trans($plang_admin.'.labels.category'),
            'items' => $categories,
            'value' => @$itemds->category_id,
            'description' => trans($plang_admin.'.descriptions.category', [
                                'href' => URL::route('categories.list', ['_key' => $context->context_key])
                                ]),
            'errors' => $errors,
            ])
            <!-- /LIST OF CATEGORIES -->
        </div>

        <!--MENU 2-->
        <div id="menu_2" class="tab-pane fade">
            <!--SAMPLE OVERVIEW-->
            @include('package-category::admin.partials.textarea', [
            'name' => 'sample_overview',
            'label' => trans($plang_admin.'.labels.overview'),
            'value' => @$item->sample_overview,
            'description' => trans($plang_admin.'.descriptions.overview'),
            'tinymce' => false,
            'errors' => $errors,
            ])
            <!--/SAMPLE OVERVIEW-->

            <!--SAMPLE DESCRIPTION-->
            @include('package-category::admin.partials.textarea', [
            'name' => 'sample_description',
            'label' => trans($plang_admin.'.labels.description'),
            'value' => @$item->sample_description,
            'description' => trans($plang_admin.'.descriptions.description'),
            'rows' => 50,
            'tinymce' => true,
            'errors' => $errors,
            ])
            <!--/SAMPLE DESCRIPTION-->
        </div>

        <!--MENU 3-->
        <div id="menu_3" class="tab-pane fade">
            <!--SAMPLE IMAGE-->
            @include('package-category::admin.partials.input_image', [
            'name' => 'sample_image',
            'label' => trans($plang_admin.'.labels.image'),
            'value' => @$item->sample_image,
            'description' => trans($plang_admin.'.descriptions.image'),
            'errors' => $errors,
            ])
            <!--/SAMPLE IMAGE-->

            <!--SAMPLE FILES-->
            @include('package-category::admin.partials.input_files', [
                'name' => 'files',
                'label' => trans($plang_admin.'.labels.files'),
                'value' => @$item->sample_files,
                'description' => trans($plang_admin.'.descriptions.files'),
                'errors' => $errors,
            ])
            <!--/SAMPLE FILES-->
        </div>

    </div>
    <!--/TAB CONTENT-->

    <!--HIDDEN FIELDS-->
    <div class='hidden-field'>
        {!! Form::hidden('id',@$item->id) !!}
        {!! Form::hidden('context',$request->get('context',null)) !!}
    </div>
    <!--/HIDDEN FIELDS-->

{!! Form::close() !!}
<!------------------------------------------------------------------------------
| End list of elements in sample form
|------------------------------------------------------------------------------>