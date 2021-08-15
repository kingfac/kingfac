<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class volontaire extends Model
{
    protected $fillable = [
        'noms',
        'adresse',
        'tel',
        'email'
    ];
    use HasFactory;
}
