<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'duties',
        'tools',
    ];

    use HasFactory;
}
