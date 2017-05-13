<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
	use SoftDeletes;

    public function addresses(){

		return $this->hasMany('App\Address');
	}

	public function state(){

		return $this->belongsTo('App\State');
	} 


	 // public function specialties()
  //   {
  //       return $this->belongsToMany('\App\Specialty','cities_specialties')->withPivot(['city_id']);
       
  //   }
	   public function specialties(){

		return $this->hasMany('App\Specialty');
	}
}
