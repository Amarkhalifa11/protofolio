<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'date',
        'url',
        'client',
        'category_id',
        'description',
        'image1',
        'image2',
        'image3',
    ];

public function category()
{
            return $this->hasOne(Category::class, 'id', 'category_id');
}
}
