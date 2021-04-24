<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = [
        'name', 'discription','status',
    ];
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    public function places(){
        return $this->hasMany('App\Models\Place','categorie_id');
    }
    
}
