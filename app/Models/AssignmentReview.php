<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignmentReview extends Model
{
    use HasFactory;
    // AssignmentReview.php (Model)
    protected $fillable = [
        'assignment_name',
        'std_id',
        'course_name',
        'total_marks',
        'pdf',
    ];

}
