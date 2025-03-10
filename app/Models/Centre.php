<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Centre extends Model
{
    use HasFactory, SoftDeletes;

    public function centres()
    {
        return $this->hasMany(CourseCentre::class, 'centre_id', 'id')
                    ->selectRaw('cat_id, MAX(id) as id')
                    ->groupBy('cat_id');
    }

    public function centresIds()
    {
        return $this->categories()->pluck('cat_id')->toArray();
    }

}