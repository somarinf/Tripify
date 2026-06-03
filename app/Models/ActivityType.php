<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityType extends Model
{
    use HasFactory;
    public $incrementing = false; // No hay ID autoincremental
    protected $primaryKey = null; // No una sola clave primaria
    protected $table = 'activity_types';

    protected $fillable = ['type', 'activity_id']; // para asignación masiva

    public $timestamps = true;
}
