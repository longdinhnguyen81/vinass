<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    protected $table = 'counter';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['index', 'call', 'facebook', 'all'];
}
