<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = 'Email';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['email'];
}
