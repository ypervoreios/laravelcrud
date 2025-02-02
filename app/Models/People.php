<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = ['name', 'grade', 'bio', 'email'];

    /** @use HasFactory<\Database\Factories\PeopleFactory> */
    use HasFactory;
}

