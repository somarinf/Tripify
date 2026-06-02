<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planner extends Model
{
    use HasFactory;
    
    protected $primaryKey = ['user_id', 'trip_id'];
    public $incrementing = false;
    protected $keyType = 'array';
    
    protected $fillable = [
        'user_id',
        'trip_id', 
        'rol'
    ];
    
    protected function setKeysForSaveQuery($query)
    {
        $keys = $this->getKeyName();
        if(!is_array($keys)){
            return parent::setKeysForSaveQuery($query);
        }
        
        foreach($keys as $keyName){
            $query->where($keyName, '=', $this->getKeyForSaveQuery($keyName));
        }
        
        return $query;
    }
    
    protected function getKeyForSaveQuery($keyName = null)
    {
        if(is_null($keyName)){
            $keyName = $this->getKeyName();
        }
        
        if (isset($this->original[$keyName])) {
            return $this->original[$keyName];
        }
        
        return $this->getAttribute($keyName);
    }
    
    // Relaciones
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
