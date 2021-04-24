<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Daira extends Model
{
    protected $fillable = [
        'name','wilaya_id','code',
    ];
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    public function willaya(){

        return $this->belongsTo('App\Models\Willaya');
    }
    
}
