<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = [
    	'name',
		'dni',
		'email',
		'password',
    ];	


    public function processes()
    {
        return $this->hasMany(Process::class);
    }
}
