<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $hidden = ['laravel_through_key', 'created_at', 'updated_at'];

    protected $fillable = ['name'];

    public function Books()
    {
        return $this->hasManyThrough(
            'App\Models\Book',
            'App\Models\AuthorBook',
            'author_id',
            'id',
            'id',
            'book_id'

        );
    }
}
