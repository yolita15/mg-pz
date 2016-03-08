<?php

namespace App

{

    use Illuminate\Database\Eloquent\Model;

    class ClassSubject extends Model
    {
        protected $fillable = [
            'class_id',
            'subject_id',
            'teacher_id',

        ];

        public function subject()
        {
            return $this->belongsTo(Subject::class);
        }

        public function classes()
        {
            return $this->belongsTo(Clas::class, 'class_id')->first();
        }

        public function user()
        {
            return $this->belongsTo(User::class, 'teacher_id')->first();
        }


    }
}
