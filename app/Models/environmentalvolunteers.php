<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class environmentalvolunteers extends Model
{
    use HasFactory;

    protected $table = "environmental_volunteers";


protected $fillable = [
    'year',
    'project',
    'total_volunteers',
    'male_volunteers',
    'female_volunteers',
];

}