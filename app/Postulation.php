<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulation extends Model
{
    protected $fillable = [
        'status',
        'date',
        'process_evaluation',
        'visit_state',
        'person_id',
        'process_id',
    ];  
    

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function process()
    {
        return $this->belongsTo(Process::class);
    }


    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }


    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
