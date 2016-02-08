<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
             'name'
    ];

    public function classSubject() {
    	return $this->hasMany(ClassSubject::class)
    }

    public function studenrMark() {
    	return $this->hasMany(StudentMark::class)
    }
}
