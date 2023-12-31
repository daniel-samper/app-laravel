<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $table = 'comments';
    
    // Relación Many to one
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
    
    // Relación Many to One
    public function images(){
        return $this->belongsTo('App\Image', 'image_id');
    }
    
    
}
