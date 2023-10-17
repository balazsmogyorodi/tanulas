<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    use HasFactory;

    protected $primarykey = 'subject_id';

    protected $fillable = [
        'name',
        'description',
        'limit'
    ];
}
