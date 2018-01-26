<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class TestChild extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'testchild';
    
    protected $fillable = ['test test 1'];
    

    public static function boot()
    {
        parent::boot();

        TestChild::observe(new UserActionsObserver);
    }
    
    
    
    
}