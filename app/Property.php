<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
		'publication_date',
		'rent_price',
		'address',
		'new_or_used',
		'type',
		'latitude',
		'longitude',
		'm2_usefull',
		'm2_built',
		'bathrooms',
		'badrooms',
		'orientation',
		'number_floor',
		'hot_water_type',
		'kitchen',
		'loggia',
		'fridge',
		'washing_machine',
		'curtains',
		'microwave_oven',
		'storage',
		'microwave_oven',
		'parking',
		'include_water',
		'include_hot_water',
		'include_internet',
		'include_tv_cable',
		'include_total_furnished',
		'gym',
		'pool',
		'laundry',
		'common_expenses_cost',
		'electricity_cost',
		'water_cost',
		'general_description',
    ]; 	

    public function processes()
    {
        return $this->hasMany(Process::class);
    }

    public function rules()
    {
        return $this->hasMany(Rule::class);
    }
}
