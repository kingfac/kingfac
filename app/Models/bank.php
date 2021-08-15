<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bank extends Model
{
    protected $fillable = ['nom', 'numero', 'bank'];
    use HasFactory;
}
