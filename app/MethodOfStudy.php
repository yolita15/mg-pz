<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MethodOfStudy extends Model
{
    protected $table = 'methods_of_study';
    protected $fillable = [
        'name'
    ];
}
