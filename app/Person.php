<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function aval()
    {
        return $this->hasOne(Aval::class);
    }

    public function postulations()
    {
        return $this->hasMany(Postulation::class);
    }
}
