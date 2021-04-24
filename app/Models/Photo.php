<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'palce_id','file_name',
    ];


   
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    public function place(){
        return $this->belongsTo('App\Models\Place','palce_id');
    }
}
