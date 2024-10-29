<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'description',
        'img_url',
        'trip_duration',
        'avg_vote',
        'tot_person_vote',
        'price',
    ];
}