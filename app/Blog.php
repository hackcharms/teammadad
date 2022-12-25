<?php

namespace App;

use App\Helper\HtmlFormatter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable=['title','body'];
    public function user()
    {
       return $this->belongsTo(User::class);
    }
    public function setTitleAttribute($value)
    {
        $this->attributes['title']=$value;
        $this->attributes['slug']=Str::slug($value,'-');
    }
    public function getCreatedDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function getHtmlBodyAttribute()
    {
        return HtmlFormatter::format($this->body);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    // public function getImageAttribute()
    // {
    //     return $this->image??'bg_1.jpg';
    // }
    public function getUrlAttribute()
    {
        return route('blog.show',$this->slug);

    }
}
