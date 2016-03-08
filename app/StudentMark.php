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
    	return $this->belongsTo(User::class,'student_id', 'id')->first();
    }

    public function subject(){
    	return $this->belongsTo(Subject::class,'subject_id')->first();
    }

    public function classes(){
    	return $this->belongsTo(Clas::class);
    }

    public function markType(){
    	return $this->belongsTo(MarkType::class,'mark_type_id')->first();
    }
}
