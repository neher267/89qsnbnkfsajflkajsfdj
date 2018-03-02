<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable = [
		'category','subject','question','a','b','c','d','ans','weight'
	];

    public function question()
    {
    	return $this->hasMany(Option::class);
    } 
}
