<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseWork extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_code',
        'course_description',
        'units',
    ];
}