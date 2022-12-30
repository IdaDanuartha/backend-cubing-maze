<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuberCompetition extends Model
{
    use HasFactory;

    protected $table = 'cuber_competitions';
    protected $guarded = [];
}
