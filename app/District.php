<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable=['code','name'];
    
    protected $primaryKey='code';
    public function users()
    {
        return $this->hasMany(User::class,'district_code','code');
    }

}
