<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $table = 'rooms';

    public function ownerDetail()
    {
        return $this->hasOne('App\Models\User','id','owner');
    }

    public function partnerDetail()
    {
        return $this->hasOne('App\Models\User','id','partner');
    }

    public function story()
    {
        return $this->hasOne('App\Models\Story','id','story_id')->with('imgs');

    }
}
