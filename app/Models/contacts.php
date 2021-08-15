<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{
    protected $fillable = [
        'icon',
        'url',
        'lib'
    ];
    use HasFactory;
}
