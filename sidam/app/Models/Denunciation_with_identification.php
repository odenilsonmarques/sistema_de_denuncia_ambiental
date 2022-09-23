<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denunciation_with_identification extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'distric',
        'road',
        'number',
        'reference_point',
        'violator',
        'annex_one',
        'annex_two',
        'annex_three',
        'description',
        'received',
        'description_status',
        'user_id',
    ];
}
