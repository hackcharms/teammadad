<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //protected $fillable=['district','position','user_id'];
    // public function users()
    // {
    //     $this->hasMany(User::class);
    // }
    protected $primaryKey='code';
    public function users()
    {
        return $this->hasMany(User::class,'district_code','code');
    }

}
