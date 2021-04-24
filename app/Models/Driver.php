<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'name', 'email', 'password','phone','photo','status','wilaya_id',
    ];

   
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    public function willaya(){
        return $this->belongsTo('App\Models\Willaya','wilaya_id');
    }
}
