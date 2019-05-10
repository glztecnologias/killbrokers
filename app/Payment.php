<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function rental()
    {
        return $this->belongsTo(Rental::class);
    }
}
