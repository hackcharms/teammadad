<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable=['name','code'];
    protected $primaryKey='code';

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function district()
    {
        return $this->belongsTo(District::class,'district_code','code');
    }

}
