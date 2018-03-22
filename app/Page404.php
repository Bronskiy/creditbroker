<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Page404 extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'page404';
    
    protected $fillable = [
          'error_404_titile',
          'error_404_text',
          'bing_search',
          'google_search'
    ];
    

    public static function boot()
    {
        parent::boot();

        Page404::observe(new UserActionsObserver);
    }
    
    
    
    
}