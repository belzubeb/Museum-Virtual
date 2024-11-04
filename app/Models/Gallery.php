<?php

namespace App\Models;

use App\Models\Gallery;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
    use HasFactory;
}
