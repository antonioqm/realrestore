<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Phone extends Model
{
	use SoftDeletes;
	    protected $hidden = [
        'created_at', 'updated_at','deleted_at', 'professional_id',
    ];
	
    public $fillable = ['ddd','type', 'number'];
		    // protected $dates = [
		    //     'created_at',
		    //     'updated_at',
		    //     'deleted_at'
		    // ];
    public function professional(){
    	
    	return $this->belongsTo('App\Professional');
    }
}
