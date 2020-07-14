<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['name','description','amount_min','amount','provider_id'];

    public function provider(){
        return $this->belongsTo(Provider::class);
    }
}
