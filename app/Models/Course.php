<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /** 
     * The attributes that are mass assignable. 
     * Relationship: One course has many Students
     */

    protected $fillable = [
        'course_name',
        'course_description',
    ];

        /** 
     * Get all students enrolled in this course.
     * Relationship: One course has many Students
     */

    public function students()
    {
        return $this->hasMany(Student::class);
    }

}
