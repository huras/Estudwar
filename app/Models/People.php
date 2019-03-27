<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'peoples';
    public $timestamps = false;
    protected $fillable = ['name'];
}
