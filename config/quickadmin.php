<?php
/**
 * Laraveldaily/Quickadmin package configuration file.
 */
return [

    /**
     * Datepicker configuration:
     */
    'date_format'        => 'Y-m-d',
    'date_format_jquery' => 'yy-mm-dd',
    'time_format'        => 'H:i:s',
    'time_format_jquery' => 'HH:mm:ss',

    /**
     * Quickadmin settings
     */
    // Default route
    'route'              => 'clspl2016',
    // Default home route
    'homeRoute'          => 'clspl2016',

    //Default home action
    // 'homeAction' => '\App\Http\Controllers\MyOwnController@index',
    // Default role to access users and CRUD
    'defaultRole'        => 1

];
