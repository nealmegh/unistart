<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'father_name',
        'mother_name',
        'ssc_result',
        'ssc_year',
        'ssc_board',
        'hsc_result',
        'hsc_year',
        'hsc_board',
        'permanent_address',
        'present_address',
        'phone',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
