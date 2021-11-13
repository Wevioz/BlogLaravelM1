<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Formation extends Model
{
    use HasFactory;
    protected $table = "formations";
    protected $fillable = ['ownerId', 'title', 'description', 'thumbnail', 'price', 'duration'];

    public function user() {
        return $this->belongsTo('App\Models\User', 'ownerId', 'id');
    }
    
}
