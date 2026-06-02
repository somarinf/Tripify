<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'total', 
        'start_date',
        'end_date',
        'description'
    ];

    public function planners()
    {
        return $this->hasMany(Planner::class);
    }
    
    public function users()
    {
        return $this->hasManyThrough(User::class, Planner::class, 'trip_id', 'id', 'id', 'user_id');
    }
}
