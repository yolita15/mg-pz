<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentMark extends Model
{
    protected $fillable = [
             'student_id',
             'subject_id',
             'class_id',
             'mark_type_id',
             'mark',
             
    ];

    public function user(){
    	return $this->belongsTo(User::class)
    }

    public function subject(){
    	return $this->belongsTo(Subject::class)
    }

    public function classes(){
    	return $this->belongsTo(Clas::class)
    }

    public function markType(){
    	return $this->belongsTo(MarkType::class)
    }
}
