<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitionResult extends Model
{
    use HasFactory;

    protected $table = 'competition_results';
    protected $guarded = [];
}
