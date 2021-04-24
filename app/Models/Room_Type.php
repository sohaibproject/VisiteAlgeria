<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room_Type extends Model
{
    protected $table='room_types';
    protected $fillable = [
        'name',
    ];


   
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    public function roomes(){
        return $this->hasMany('App\Models\Room','room_type_id');
    }
}
