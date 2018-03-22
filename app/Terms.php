<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Terms extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'terms';
    
    protected $fillable = ['text'];
    

    public static function boot()
    {
        parent::boot();

        Terms::observe(new UserActionsObserver);
    }
    
    
    
    
}