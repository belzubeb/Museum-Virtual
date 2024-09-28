<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
    use HasFactory;
}
