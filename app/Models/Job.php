<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $guarded = [];

    // protected $casts = [
    //     'expireDate' => 'date:m-d-Y',
    // ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function jobType()
    {
        return $this->hasOne(JobType::class, 'id', 'job_type_id');
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function applies()
    {
        return $this->hasMany(Apply::class);
    }

    public function company()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
