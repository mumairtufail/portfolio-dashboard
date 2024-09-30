<?php
// app/Models/Education.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'institution',
        'degree',
        'field_of_study',
        'start_date',
        'end_date',
        'description'
    ];

   

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

