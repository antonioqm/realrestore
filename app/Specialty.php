<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
	// use Searchable;

	
    public function professionals(){
        return $this->belongsToMany('\App\Professional','professionals_specialities');
    }

    public function cities()
    {
        return $this->morphToMany('\App\City', 'specializzable');
    }


    // public function cities(){
    //     return $this->belongsToMany('\App\City','cities_specialties')->withPivot(['city_id']);

    // }

    public function city(){
    	return $this->belongsTo('\App\City');
    }




    // public function professionals()
    // {
    //     return $this->belongsToMany('\App\Professional','professionals_specialities');
       
    // }

}
