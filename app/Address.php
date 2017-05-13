<?php

namespace App;

use Laravel\Scout\Searchable;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{

	public $fillable = ['address','clinic', 'thoroughfare', 'district', 'complement', 'city_id'];

	// use Searchable;
    public function professionals(){
        return $this->belongsToMany('\App\Professional','addresses_professionals');

    }

    public function city(){

		return $this->belongsTo('App\City');
	} 
}
