<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'posts';

    protected $fillable = [
          'post_title',
          'post_slug',
          'categories_id',
          'post_date',
          'post_text'
    ];


    public static function boot()
    {
        parent::boot();

        Posts::observe(new UserActionsObserver);
    }

    public function categories()
    {
        return $this->hasOne('App\Categories', 'id', 'categories_id');
    }



    /**
     * Set attribute to date format
     * @param $input
     */
    public function setPostDateAttribute($input)
    {
        if($input != '') {
            $this->attributes['post_date'] = Carbon::createFromFormat(config('quickadmin.date_format'), $input)->format('Y-m-d');
        }else{
            $this->attributes['post_date'] = '';
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getPostDateAttribute($input)
    {
        if($input != '0000-00-00') {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('quickadmin.date_format'));
        }else{
            return '';
        }
    }



}
