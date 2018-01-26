<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class MainImage extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'mainimage';
    
    protected $fillable = [
          'main_image',
          'main_text',
          'link_title',
          'link_url'
    ];
    

    public static function boot()
    {
        parent::boot();

        MainImage::observe(new UserActionsObserver);
    }
    
    
    
    
}