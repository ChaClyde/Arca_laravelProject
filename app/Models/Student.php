<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'course_id',
    ];

    /**
     * Get the course that this student belongs to.
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
