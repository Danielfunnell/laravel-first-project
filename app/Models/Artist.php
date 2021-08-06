<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    
    protected $table = 'Artist';
    
    public function albums() {
        
        return $this->hasMany(Album::class, 'ArtistId', 'ArtistId');
    }
    
    public function album() {
        
        return $this->hasOne(Album::class, 'ArtistId', 'ArtistId');
    }
}
