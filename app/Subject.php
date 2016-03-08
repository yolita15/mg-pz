<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
             'name'
    ];

    public function classSubject() {
    	return $this->hasMany(ClassSubject::class);
    }

    public function studentMark() {
    	return $this->hasMany(StudentMark::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function teacher() {
        return $this->hasMany(Teacher::class);
    }
}
