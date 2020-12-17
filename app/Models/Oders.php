<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oders extends Model
{
    protected $table ='oders';
	protected $guarded =[];

	public function user()
    {
        return $this->belongsTo('App\Models\User','c_id');
    }
    public function oders_detail()
	{
		return $this->hasMany('App\Models\Oders_detail','o_id');
	}
}
