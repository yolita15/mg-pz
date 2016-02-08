<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
             'name'
    ];

    public function classes() {
    	return $this->hasMany(Clas::class)
    }

}
