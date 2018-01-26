<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class SEO extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'seo';
    
    protected $fillable = [
          'meta_title',
          'meta_description',
          'meta_keywords'
    ];
    

    public static function boot()
    {
        parent::boot();

        SEO::observe(new UserActionsObserver);
    }
    
    
    
    
}