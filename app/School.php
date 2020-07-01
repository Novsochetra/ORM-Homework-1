<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends Model
{
    //
    use SoftDeletes;
    
    protected $table = 'schools';

    protected $fillable = ['name'];

    public function students()
    {
        return $this->hasMany('App\Student');
    }
}
