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
          'map_item_1',
          'map_text_1',
          'map_item_2',
          'map_text_2',
          'map_item_3',
          'map_text_3',
          'map_item_4',
          'map_text_4',
          'map_item_5',
          'map_text_5',
          'map_item_6',
          'map_text_6',
          'map_item_7',
          'map_text_7',
          'map_item_8',
          'map_text_8',
          'map_item_9',
          'map_text_9',
          'map_item_10',
          'map_text_10',
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