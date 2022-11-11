<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Module extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =
        [
            'course_id',
            'video_src',
            'explanation'
        ];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
