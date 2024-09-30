<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title', 'description', 'stack', 'image_path', 'project_url', 'completion_date'
    ];

    protected $dates = ['completion_date'];

    public function getStackArrayAttribute()
    {
        return explode(',', $this->stack);
    }

    public function setStackAttribute($value)
    {
        $this->attributes['stack'] = is_array($value) ? implode(',', $value) : $value;
    }
}