<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubImage extends Model
{
    use HasFactory;

    protected $table = 'sub_image';

    protected $fillable = [
        'product_id',
        'sub_image',
    ];
}
