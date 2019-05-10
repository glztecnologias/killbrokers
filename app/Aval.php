<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aval extends Model
{
    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
