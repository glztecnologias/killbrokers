<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    
    protected $fillable = [
        'start_date',
        'end_date',
        'max_number_postulation',
        'type_doc_date',
        'property_id',
        'owner_id',
        'requirement_id',
    ]; 

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function requirement()
    {
        return $this->belongsTo(Requirement::class);
    }

    public function property()
    {
        return $this->belongsTo(Property::class);
    }


    public function postulations()
    {
        return $this->hasMany(Postulation::class);
    }

}
