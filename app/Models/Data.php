<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'track',
        'age',
        'birthday',
        'website',
        'degree',
        'email',
        'phone',
        'city',
        'status',
        'description',
        'image',
    ];
}
