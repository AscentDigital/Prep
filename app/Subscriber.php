<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable = ['number', 'misc'];

    public function companies(){
    	return $this->belongsToMany(Company::class)->withTimestamps();
    }
}
