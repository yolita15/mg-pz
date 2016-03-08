<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MarkType extends Model
{
    protected $fillable = [
             'type'
    ];

    public function studentMark(){
    	return $this->hasMany(StudentMark::class);
    }
}
