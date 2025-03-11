<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceImage extends Model
{
    protected $guarded = [];

    public function services(){
        return $this->belongsTo(Service::class,'service_id');
    }
}
