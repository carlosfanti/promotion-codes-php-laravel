<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromotionCode extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'code', 'used',
    ];

    // -----Relacion entre las tablas USER y PROMOTIONCODE: (1,1):(n,1) 
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
