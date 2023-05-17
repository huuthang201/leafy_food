<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected  $table = 'discount';

    protected $fillable = [
        'name',
        'code',
        'percent',
        'start_date',
        'end_date',
    ];
}
