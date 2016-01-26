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
}
