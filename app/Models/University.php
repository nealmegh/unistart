<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class University extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'uri',
        'email',
        'phone',
        'address',
        'api_availability',
        'api_user',
        'api_secret',
        'status'
    ];
}
