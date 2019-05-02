<?php

return [

    /*
    |-----------------------------------------------------------------------
    | MAIN MENU
    |-----------------------------------------------------------------------
    | Top menu
    |
    */
    'menus' => [
        'top-menu' => 'Samples'
    ],





    /*
    |-----------------------------------------------------------------------
    | SIDEBAR
    |-----------------------------------------------------------------------
    | Left side bar
    |
    |
    |
    */
    'sidebar' => [
        'list' => 'Items',
        'add' => 'Add new',
        'trash' => 'Trash',
        'config' => 'Configurations',
        'lang' => 'Languages',
        'category' => 'Categories',
    ],





    /*
    |-----------------------------------------------------------------------
    | Table column
    |-----------------------------------------------------------------------
    | The list of columns in table
    |
    */
    'columns' => [
        'order' => '#',
        'name' => 'Sample name',
        'operations' => 'Operations',
        'updated_at' => 'Updated at',
        'filename' => 'File name',
    ],


    /*
    |-----------------------------------------------------------------------
    | Pages
    |-----------------------------------------------------------------------
    | Pages
    |
    */
    'pages' => [
        'title-list' => 'List of samples',
        'title-list-search' => 'Search results',
        'title-edit' => 'Edit sample',
        'title-add' => 'Add new sample',
        'title-delete' => 'Delete sample',
        'title-config' => 'Current configurations',
        'title-lang' => 'Manage list of languages',
    ],





    /*
    |-----------------------------------------------------------------------
    | Button
    |-----------------------------------------------------------------------
    | The list of buttons
    |
    */
    'buttons' => [
        'search' => 'Search',
        'reset' => 'Resest',
        'add' => 'Add',
        'save' => 'Save',
        'delete' => 'Delete',
    ],





    /*
    |-----------------------------------------------------------------------
    | Form
    |-----------------------------------------------------------------------
    | The list of elements in form
    |
    |
    */
    'form' => [
        'keyword' => 'Keyword',
        'sorting' => 'Sorting',
        'no-selected' => 'No selected',
        'status' => 'Status',
    ],





    /*
    |-----------------------------------------------------------------------
    | Description
    |-----------------------------------------------------------------------
    | Description
    |
    */
    'descriptions' => [
        'form' => 'Sample form',
        'update' => 'Update sample',
        'name' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'category' => 'Click <a href=":href">here</a> to manage list of categories by token.',
        'overview' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'image' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'files' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'list' => 'List of items',
        'counters' => 'There are <b>:number</b> items',
        'counter' => 'There is <b>:number</b> item',
        'not-found' => 'Not found items',
        'config' => 'List of configurations',
        'lang' => 'List of languages',
    ],



    /*
    |-----------------------------------------------------------------------
    | Error
    |-----------------------------------------------------------------------
    | Show error message
    |
    |
    |
    */
    'errors' => [
        'required' => ':attribute is required',
        'required_length' => '<b> :attribute </b> allows from: <b>:minlength</b> to <b>:maxlength</b> characters.',
        'required_min_length' =>'<b> :attribute </b> allows from: <b>:minlength</b> characters.',
    ],




    /*
    |-----------------------------------------------------------------------
    | FIELDS
    |-----------------------------------------------------------------------
    | Column name in table
    |
    |
    |
    */
    'fields' => [
        'id' => 'Sample ID',
        'name' => 'Sample name',
        'description' => 'Sample Description',
        'overview' => 'Sample Overview',
        'slug' => 'Slug',
        'updated_at' => 'Updated at'
    ],




    /*
    |-----------------------------------------------------------------------
    | LABLES
    |-----------------------------------------------------------------------
    | The lables of element in form
    |
    |
    |
    */
    'labels' => [
        'name' => 'Sample name',
        'overview' => 'Sample overview',
        'description' => 'Sample description',
        'image' => 'Sample image',
        'files' => 'Sample files',
        'category' => 'Category name',
        'title-search' => 'Search sample',
        'title-backup' => 'Backups',
        'config' => 'Configurations',
    ],





    /*
    |-----------------------------------------------------------------------
    | TABS
    |-----------------------------------------------------------------------
    | The name of tab
    |
    |
    |
      */
    'tabs' => [
        'menu_1' => 'Basic',
        'menu_2' => 'Advance',
        'menu_3' => 'Other',
        'menu_4' => 'Menu 4',
        'menu_5' => 'Menu 5',
        'menu_6' => 'Menu 6',
        'menu_7' => 'Menu 7',
        'menu_8' => 'Menu 8',
        'menu_9' => 'Menu 9',
        'menu_9' => 'Menu 9',
        'guide'  => 'Guide',
        'other'  => 'Other',
        'basic'  => 'Basic',
        'advance' => 'Advance',
    ],





    /*
    |-----------------------------------------------------------------------
    | HEADING
    |-----------------------------------------------------------------------
    |
    |
    |
    |
    */
    'headings' => [
        'form-search' => 'Search samples',
        'list' => 'List of samples',
        'search' => 'Search results',
    ],





    /*
    |-----------------------------------------------------------------------
    | CONFIRMS
    |-----------------------------------------------------------------------
    | List of messages for confirm
    |
    |
    |
    */
    'confirms' => [
        'delete' => 'Are you sure you want to delete this item?',
    ],





    /*
    |-----------------------------------------------------------------------
    | ACTIONS
    |-----------------------------------------------------------------------
    |
    |
    |
    |
    */
    'actions' => [
        'add-ok' => 'Add item successfully',
        'add-error' => 'Add item failed',
        'edit-ok' => 'Edit item successfully',
        'edit-error' => 'Edit item failed',
        'delete-ok' => 'Delete item successfully',
        'delete-error' => 'Delete item failed',
    ],
];