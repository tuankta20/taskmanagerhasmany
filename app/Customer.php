<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=['name','email','dob'];

    public function city(){
        return $this->belongsTo('App\City');
    }
}
