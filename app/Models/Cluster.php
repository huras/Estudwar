<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cluster extends Model
{
    protected $table = 'clusters';
    public $timestamps = false;
    protected $fillable = ['title'];

    public function peoples(){
        return $this->belongsToMany('App\Models\People', 'cluster_user', 'cluster_id', 'people_id')->withPivot('created_at');
    }

    public function blacklisters(){
        return $this->belongsToMany('App\Models\People', 'blacklist', 'cluster_id', 'people_id')->as('blacklist')->withPivot('reason');
    }
}
