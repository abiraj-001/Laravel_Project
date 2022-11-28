<?php

namespace App\Models;



use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Traits\Followable;



class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $fillable = [
        'username',
        'name',
        'email',
        'avatar',
        'password',
        'register_page',
        'entry_page'
     
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function timeline(){
        //  return Tweety::where('user_id',$this->id)->latest()->get();

        $friends = $this->follows()->pluck('id');

        return Tweety::whereIn('user_id',$friends)->orWhere('user_id',$this->id)->latest()->simplePaginate(6);
    }
    public function tweets(){
        return $this->hasMany(Tweety::class)->latest();
    }

    public function getAvatarAttribute($value){
    // return "https://i.pravatar.cc/?u=". $this->email;

    return asset('storage/'.$value);
    }

    public function getRouteKeyName(){
        return 'name';
    }
    public function path($append = '')
    {
        $path = route('profile', $this->username);

        return $append ? "{$path}/{$append}" : $path;
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] =$value;
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

}
