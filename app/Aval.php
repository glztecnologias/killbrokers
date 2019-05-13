<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aval extends Model
{

	protected $fillable = [
		'name',
		'dni',
		'email',
		'nationality',
		'age',
		'profession',
		'salary',
		'institution_work',
		'years_of_work',
		'dicom_report_path',
		'work_contract_path',
		'year_of_work_contract_path',
		'have_checking_account',
		'name_bank',
		'dni_document_path',
		'address',
		'person_id',
	];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
