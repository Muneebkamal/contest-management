<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
    use HasFactory;
    protected $timestamp = true;
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'categories',
    ];
}
