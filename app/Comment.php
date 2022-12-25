<?php

namespace App;

use App\Helper\HtmlFormatter;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=['body'];

    public function user()
    {
       return $this->belongsTo(User::class);
    }
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
    public function getCreatedDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }
    public function getHtmlBodyAttribute()
    {
        return HtmlFormatter::format($this->body);
    }
    public static function boot()
    {
        parent::boot();
        static::created(
            function($comment)
            {
                // echo "Created";
                $comment->blog->increment('comment_count');
            }
        );
            static::deleted(
                    function($comment)
                {
                    // echo "deleted";
                $comment->blog->decrement('comment_count');
            }
        );
    }
}
