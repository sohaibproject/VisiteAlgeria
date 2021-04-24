<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'name','wilaya_id','adress','status','phone_1','phone_2','photo','rating',
    ];
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    public function willaya(){
        return $this->belongsTo('App\Models\Willaya','wilaya_id');
    }
    public function roomes(){
        return $this->hasMany('App\Models\Room','hotel_id');
    }
}
