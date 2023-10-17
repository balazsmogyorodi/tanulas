<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    use HasFactory;

    protected $primarykey = 'lesson_id';

    protected $fillable = [
        'status',
        'subject_id',
        'user_id'
    ];
}
