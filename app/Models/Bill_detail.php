<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Bill_detail extends Model
{
    protected $table='bill_detail';

    public function bill()
    {
        return $this->belongsTo('App\Models\Bill','id_bill','id');
        
    }

    public function products()
    {
        return $this->belongsTo('App\Models\Products','id_product','id');
    }
}
