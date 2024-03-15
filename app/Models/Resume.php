<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    protected $fillable = [
        'cover_letter',
    ];
     public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function education()
    {
        return $this->belongsTo(Education::class);
    }

    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
    public function award()
    {
        return $this->belongsTo(Award::class);
    }
    
}
