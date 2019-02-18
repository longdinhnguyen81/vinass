<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['name', 'parent_id'];

    public function news(){
    	return $this->hasMany('App\News');
    }
}
