<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    use HasFactory;
    protected $fillable = ['status', 'std_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'std_id');
    }
}
