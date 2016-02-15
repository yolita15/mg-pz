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
            'method_of_study_id',

        ];

        public function subject()
        {
            return $this->belongsTo(Subject::class);
        }

        public function classes()
        {
            return $this->belongsTo(Clas::class);
        }

        public function user()
        {
            return $this->belongsTo(User::class);
        }

        public function methodOfStudy()
        {
            return $this->belongsTo(MethodOfStudy::class);
        }

    }
}
