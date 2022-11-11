<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, softDeletes;
    protected $fillable = [
        'title',
        'amount',
        'teacher_id',
        'status',
        'stripe_plan'
    ];
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function modules()
    {
        return $this->hasMany(Module::class);
    }

}
