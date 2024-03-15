<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const ADMIN = 1;

    const COMPANY = 2;

    const CANDIDATE = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'mobile',
        'status',
        'google_id',
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
        'password' => 'hashed',
    ];

    public function isAdmin(): bool
    {
        return $this->role === 1;
    }

    public function isCompany(): bool
    {
        return $this->role === 2;
    }

    public function isCandidate(): bool
    {
        return $this->role === 3;
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }

    public function blog()
    {
        return $this->hasMany(Blog::class);
    }

    public function education()
    {
        return $this->hasOne(Education::class);
    }

    public function experience()
    {
        return $this->hasOne(Experience::class);
    }

    public function skill()
    {
        return $this->hasOne(Skill::class);
    }

    public function award()
    {
        return $this->hasOne(Award::class);
    }
    public function resume()
    {
        return $this->hasOne(Resume::class);
    }

    public function apply()
    {
        return $this->hasMany(Apply::class);
    }
}
