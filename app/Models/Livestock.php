<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livestock extends Model
{
    protected $fillable = ['first-name', 'last-name', 'gender', 'DOB', 'email', 'background'];

    /** @use HasFactory<\Database\Factories\LivestockFactory> */
    use HasFactory;
}
