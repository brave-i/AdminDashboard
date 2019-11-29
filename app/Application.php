<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //
    protected $fillable = [
    	"app_country", "app_city", "app_state", "status", "total_target_rent"
    ];

    public function users(){
    	return $this->belongsToMany(User::class);
    }
}
