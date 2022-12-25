<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
        'mobile_number',
        'college','district_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function isAdmin()
    {
        return $this->role==1;
    }
    public function isSuperAdmin()
    {
        return $this->role==2;
    }
    public function blogs()
    {
       return $this->hasMany(Blog::class)->orderBy('created_at','desc');
    }
    public function comments()
    {
       return $this->hasMany(Comment::class)->orderBy('created_at','desc');
    }
    public function district()
    {
        return $this->belongsTo(District::class);
    }
    public function getPostAttribute()
    {
        $this->role;
        switch ($this->role) {
            case 99:
                $post='Administrator';
            break;
            case 90:
                $post='Admin';
            break;
            case 7:
                $post='जिला संचालक';
                break;
            case 6:
                $post='जिला अध्यक्ष';
                break;
            case 5:
                $post='जिला उपाध्यक्ष';
                break;
            case 4:
                $post='जिला सचिव';
                break;
            case 3:
                $post='जिला कोषाध्यक्ष';
                break;
            case 2:
                $post='संस्था अध्यक्ष';
                break;
            case 1:
                $post='संस्था उपाध्यक्ष';
                break;
            default:
                $post='User';
                break;
        }
        return $post;
    }
    public function setEmailAttribute($value)
    {
        $this->attributes['email']=$value;
        $this->attributes['username']=explode('@',$value)[0];
    }
    // public function getProfilePicAttribute()
    // {
    //     return 'bg_1.jpg';
    //     // return explode('@',$this->email)[0].'.jpg';
    // }
    public function getProfileUrlAttribute(Type $var = null)
    {
        return route('user.show',$this->username);
    }
}
