<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenderStatistics extends Model
{
    use HasFactory;
    protected $table = "gender_statistics";

    protected $fillable=[
        'year',
        'item',
        'total_count',
        'male_count', 
        'female_count',
    ];
}
