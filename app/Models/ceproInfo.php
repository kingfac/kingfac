<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ceproInfo extends Model
{
    protected $fillable = ['lib', 'info'];
    use HasFactory;
}
