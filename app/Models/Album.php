<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'photo', 'slug', 'event_date'];
    public function photos()
    {
        return $this->hasMany('App\Models\Photo');
    }
}
