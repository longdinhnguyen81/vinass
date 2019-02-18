<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['name', 'description', 'job'];
}
