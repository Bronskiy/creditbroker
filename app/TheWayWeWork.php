<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class TheWayWeWork extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'thewaywework';
    
    protected $fillable = [
          'mainimage_id',
          'top_text',
          'main_title',
          'main_text',
          'bottom_section',
          'seo_id'
    ];
    

    public static function boot()
    {
        parent::boot();

        TheWayWeWork::observe(new UserActionsObserver);
    }
    
    public function mainimage()
    {
        return $this->hasOne('App\MainImage', 'id', 'mainimage_id');
    }


    public function seo()
    {
        return $this->hasOne('App\SEO', 'id', 'seo_id');
    }


    
    
    
}