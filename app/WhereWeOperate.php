<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class WhereWeOperate extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'whereweoperate';
    
    protected $fillable = [
          'mainimage_id',
          'top_text',
          'map_image_1',
          'map_text_1',
          'map_image_2',
          'map_text_2',
          'main_title',
          'state_image_1',
          'state_text_1',
          'state_image_2',
          'state_text_2',
          'state_image_3',
          'state_text_3',
          'state_image_4',
          'state_text_4',
          'state_image_5',
          'state_text_5',
          'state_image_6',
          'state_text_6',
          'state_image_7',
          'state_text_7',
          'state_image_8',
          'state_text_8',
          'bottom_section',
          'seo_id'
    ];
    

    public static function boot()
    {
        parent::boot();

        WhereWeOperate::observe(new UserActionsObserver);
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