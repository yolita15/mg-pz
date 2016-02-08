<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MethodOfStudy extends Model
{
    protected $fillable = [
             'name'
    ];

    protected $table = 'methods_of_study'

    public function classSubject(){
    	return $this->hasMany(ClassSubject::class)
    }
}
