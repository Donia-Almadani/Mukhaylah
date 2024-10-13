<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class User extends Model implements Authenticatable
{
    use AuthenticatableTrait;
    use HasFactory;

    protected $table='users';
    public $timestamps = false;
/**
 * @var array<int,string>
 */
    protected $fillable=[
        'name',
        'email',
        'password',
        
    ];

    public function story(){
        return $this->belongsToMany(Story::class);
    }
    
}
