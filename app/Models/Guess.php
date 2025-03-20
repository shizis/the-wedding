<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guess extends Model
{
    /** @use HasFactory<\Database\Factories\GuessFactory> */
    use HasFactory;
    protected $table = 'guesses';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'slug'];
}
