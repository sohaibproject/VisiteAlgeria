<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Willaya extends Model
{
    protected $fillable = [
        'name','code','discription','photo',
    ];
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    
    public function places(){
        return $this->hasMany('App\Models\Place','wilaya_id');
    }
    public function hotels(){
        return $this->hasMany('App\Models\Hotel','wilaya_id');
    }
    public function drivers(){
        return $this->hasMany('App\Models\Driver','wilaya_id');
    }
      public function daira(){

        return $this->HasMany('App\Models\Daira');
    }
    
}
