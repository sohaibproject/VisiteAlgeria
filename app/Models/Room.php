<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'name', 'hotel_id','status', 'price','photo','room_type_id',
    ];
    

   
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    public function hotels(){
        return $this->belongsTo('App\Models\Hotel','hotel_id');
    }
    public function room_type(){
        return $this->belongsTo('App\Models\Room_Type','room_type_id');
    }
}
