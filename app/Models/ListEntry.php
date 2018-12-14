<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListEntry extends Model
{
    protected $table = 'list_entries';
    public $timestamps = true;
    protected $fillable = array('term');
}
