<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function bill_detail(){
        return $this->hasMany('App\Bill_Detail');
    }

    public function cart(){
        return $this->hasOne('App\Cart');
    }
}
