<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = [
        'name', 'main_photo', 'more_photo','categorie_id','wilaya_id','discription','slug','user_id','status',
    ];
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    public function categorie(){
        return $this->belongsTo('App\Models\Categorie','categorie_id');
    }
    public function willaya(){
        return $this->belongsTo('App\Models\Willaya','wilaya_id');
    }
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    public function photos(){
        return $this->HasMany('App\Models\Photo','palce_id');
    }
  
    
}
