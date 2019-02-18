<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['title', 'description', 'detail', 'picture', 'active', 'cat_id', 'user_id'];

    public function cats(){
    	return $this->belongsTo('App\Cat', 'cat_id');
    }
    public function users(){
    	return $this->belongsTo('App\User', 'user_id');
    }
}
