<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $table = 'Slide';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['picture'];
}
