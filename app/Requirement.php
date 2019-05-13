<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    protected $fillable = [

    	'nationality',
		'min_salary',
		'aval',
		'dicom',
		'number_salary_settlements',
		'number_quotations',
		'number_warranty_pay',
		'notary_cost',
		'pay_month_advance',
		'dni_document',
		'min_period_rent',
		'general_description',
	];
	
    public function processes()
    {
        return $this->hasMany(Process::class);
    }
}
