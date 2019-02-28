<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = 'email';
    protected $primaryKey = 'id';
    public $fillable = ['email'];
    public $timestamps = false;
}
