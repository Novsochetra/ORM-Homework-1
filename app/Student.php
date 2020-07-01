<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    
    protected $table = 'students';

    protected $fillable = ['first_name', 'last_name', 'school_id'];

    public function school()
    {
        return $this->belongsTo('App\School');
    }
}
