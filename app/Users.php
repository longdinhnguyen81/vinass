<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['username', 'password', 'fullname', 'detail', 'avatar'];
    
    public function news(){
    	return $this->hasMany('App\News');
    }
}
