<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scheme extends Model
{
    use HasFactory;
    public function categories()
    {
        return $this->hasMany(SchemeCategoryCourse::class, 'scheme_id', 'id')
                    ->selectRaw('cat_id, MAX(id) as id')
                    ->groupBy('cat_id');
    }

    public function categoryIds()
    {
        return $this->categories()->pluck('cat_id')->toArray();
    }

    public function courses()
    {
        return $this->hasMany(SchemeCategoryCourse::class, 'scheme_id', 'id');
    }

    public function courseIds()
    {
        return $this->courses()->pluck('course_id')->toArray();
    }
}
