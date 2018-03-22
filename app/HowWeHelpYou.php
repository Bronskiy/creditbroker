<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class HowWeHelpYou extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'howwehelpyou';
    
    protected $fillable = [
          'mainimage_id',
          'top_text',
          'main_text',
          'side_image_desktop',
          'item_image_1',
          'item_text_1',
          'item_image_2',
          'item_text_2',
          'item_image_3',
          'item_text_3',
          'item_image_4',
          'item_text_4',
          'item_image_5',
          'item_text_5',
          'bottom_section',
          'seo_id'
    ];
    

    public static function boot()
    {
        parent::boot();

        HowWeHelpYou::observe(new UserActionsObserver);
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