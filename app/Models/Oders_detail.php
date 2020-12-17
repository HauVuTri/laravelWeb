<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oders_detail extends Model
{
    protected $table ='oders_detail';
	protected $guarded =[];

	 public function oders()
    {
        return $this->belongsTo('App\Models\Oders','o_id');
    }

    public function products()
    {
        return $this->hasOne('App\Models\Products','pro_id');
    }
}
