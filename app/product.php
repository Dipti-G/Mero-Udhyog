<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable=['name','description','size','category_id','image'];
public function category(){
    $this->belongsTo(Category::class);
}
}
