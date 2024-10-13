<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;
    protected $table='stories';
    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function imgs()
    {
        return $this->hasMany(StoreImg::class, 'store_id', 'id');
    }
}

