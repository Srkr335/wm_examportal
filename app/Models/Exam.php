<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    public function batch()
    {
        return $this->belongsTo(Batch::class, 'batch_id');
    }
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
    public function centre()
    {
        return $this->belongsTo(Centre::class, 'exam_centre_id');
    }
}
