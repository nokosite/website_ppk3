<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    use HasFactory;

    protected $shield = ['id'];

    protected $fillable = [
        'name',
        'email',
        'photo',
        'bio',
        'instagram_handle',
        'tiktok_handle',
    ];

    /** @return HasMany<Post> */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'author_id');
    }
}