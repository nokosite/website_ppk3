<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categories extends Model
{
    use HasFactory;

    protected $table = 'blog_categories';

    protected $fillable = [
        'name',
        'slug',
        'is_visible',
    ];
}