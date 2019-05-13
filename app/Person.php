<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
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
        'user_id',
    ];  

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
