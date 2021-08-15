<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentaire extends Model
{
    protected $fillable = ['comment', 'name', 'question'];
    use HasFactory;
}
