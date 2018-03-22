<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Variables extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'variables';
    
    protected $fillable = [
          'facebook',
          'twitter',
          'linkedin',
          'phone',
          'email'
    ];
    

    public static function boot()
    {
        parent::boot();

        Variables::observe(new UserActionsObserver);
    }
    
    
    
    
}