<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    
    public function postulation()
    {
        return $this->belongsTo(Postulation::class);
    }
}
