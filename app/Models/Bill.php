<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table='bills';

    public function users()
    {
        return $this->belongsTo('App\Users','id_user','id');
    }

    public function bill_detail()
    {
        return $this->hasOne('App\Models\Bill_detail','id_bill','id');
    }
}
