<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
             'class_id'
    ];

    public function classes(){
    	return $this->belongsTo(Clas::class)
    }
}
