<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail_img extends Model
{
   	protected $table ='detail_img';
	protected $guarded =[];

	public function products()
    {
        return $this->belongsTo('App\Models\Products','pro_id');
    }
}
