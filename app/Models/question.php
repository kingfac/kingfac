<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    protected $fillable = ['name', 'objet','contenu'];
    use HasFactory;
}
