<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class temoignage extends Model
{
    protected $fillable = [
        'noms',
        'url',
        'descri',
        'email'
    ];
    use HasFactory;
}
