<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Shelter extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'shelter_name', 'shelter_address', 'shelter_phone',
    ];
    
    protected $table = 'shelters';

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
