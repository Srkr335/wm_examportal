<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function courses()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
    public function batches()
    {
        return $this->belongsTo(Batch::class, 'batch_id');
    }
    public function studentname()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function centre()
    {
        return $this->belongsTo(Centre::class, 'centre_id', 'id');
    }
}
