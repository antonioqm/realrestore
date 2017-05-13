<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Professional extends Model
{

    use SoftDeletes;

    public $fillable = ['name','register', 'key_words', 'sex', 'metts', 'type', 'doctor'];
    
	// use Searchable;


    public function addresses()
    {
        return $this->belongsToMany('\App\Address','addresses_professionals');
       
    }

    public function specialties()
    {
        return $this->belongsToMany('\App\Specialty','professionals_specialities');
       
    }


    public function phones()
    {
		return $this->hasMany('App\Phone');
    }

    public function getSpecialtiessAttribute(){
        return $this->specialties()->pluck('specialty_id')->toArray();
    }




    // public function specialties()
    // {
    //     return $this->morphToMany('\App\Specialty', 'specializzable');
    // }

    //     public function specialties()
    // {
    //     return $this->morphToMany('\App\Specialty', 'professionalizables');
    // }





}
