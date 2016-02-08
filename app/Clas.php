<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clas extends Model
{
    protected $fillable = [
             'profile_id',
             'name'
    ];

    protected $table = 'classes'

    public function profile() {
    	return $this->belongsTo(Profile::class)
    }

    public function user() {
    	return $this->hasMany(User::class)
    }

    public function classSubject() {
    	return $this->hasMany(ClassSubject::class)
    }

    public function student() {
    	return $this->hasMany(Student::class)
    }

    public function studentMark() {
    	return $this->hasMany(StudentMark::class)
    }
}
