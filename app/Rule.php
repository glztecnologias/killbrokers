<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    
    protected $fillable = [
    	'max_number_people',
		'pets',
		'parties',
		'general_description',
		'property_id',
	];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
