<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function parent()
    {
        return $this->belongsTo(Service::class, 'parent_id')->withDefault();
    }

    public function children()
    {
        return $this->hasMany(Service::class, 'parent_id');
    }
}
