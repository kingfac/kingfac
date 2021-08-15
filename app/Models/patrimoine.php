<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patrimoine extends Model
{
    protected $fillable = [
        'lib',
        'qte',
        'nature',
        'patri_id'
    ];
    use HasFactory;
}
