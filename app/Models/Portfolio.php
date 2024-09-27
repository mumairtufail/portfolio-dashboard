<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'stack',
        'image_path',
        'project_url',
        'completion_date',
    ];

    protected $casts = [
        'stack' => 'array',
        'completion_date' => 'date',
    ];
}