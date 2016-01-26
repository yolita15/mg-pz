<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clas extends Model
{
    protected $fillable = [
        'profile_id',
        'name'
    ];
    protected $table = 'classes';

    public function profile() {
        return $this->belongsTo(Profile::class);
    }
}
