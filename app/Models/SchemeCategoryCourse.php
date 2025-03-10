<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchemeCategoryCourse extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id','id');
    }
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id','id');
    }
}
