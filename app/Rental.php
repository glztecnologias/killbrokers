<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{

	protected $fillable = [

        'path_contract',
        'date_start',
        'date_end',
        'postulation_id',

	];

    public function postulation()
    {
        return $this->belongsTo(Postulation::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
