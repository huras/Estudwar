<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blacklist extends Model
{
    protected $table = 'blacklist';
    public $timestamps = false;
    protected $fillable = ['user_id', 'reason', 'user_cluster_id'];
}
