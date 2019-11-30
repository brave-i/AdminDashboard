<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //
    protected $fillable = [
    	"app_country", "app_state", "app_city", "neighborhoods", "applicant_amount", "amenities", "status", "total_target_rent", "individual_target_rent"
    ];

    public function users(){
    	return $this->belongsToMany(User::class);
    }
}
