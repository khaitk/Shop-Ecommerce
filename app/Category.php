<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    //1 loai co nhieu san pham dung hasOne
    public function product(){
        return $this->hasOne('App\Product');
    }

}
