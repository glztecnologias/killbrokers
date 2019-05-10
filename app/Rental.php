<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    public function postulation()
    {
        return $this->belongsTo(Postulation::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
