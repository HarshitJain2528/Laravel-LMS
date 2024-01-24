<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;
    protected $fillable = [
        'assignment_title',
        'assignment_question',
        'total_marks',
        'course_id',
        'assignment_id'
    ];
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
    public function marks()
    {
        return $this->hasMany(AssignmentReview::class, 'assignment_id');
    }
}
