<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $filable = [
        'time','title', 'description'
    ];
    public function users() {
        return $this->belongsToMany('App\User');
    }
}
