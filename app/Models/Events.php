<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $table="events";
    protected $fillable=["title","description","event_date","user_id"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function participants()
    {
        return $this->belongsToMany(User::class, 'participants', 'event_id', 'user_id');
    }
    
    public function comments()
    {
        return $this->hasMany(Comments::class,'event_id');
    }
}
