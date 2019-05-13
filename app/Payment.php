<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'month',
		'year',
		'amount',
		'rental_id',
    ];	


    public function rental()
    {
        return $this->belongsTo(Rental::class);
    }
}
