<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sousActivite extends Model
{
    protected $fillable = ['sous_titre', 'activite_id'];
    use HasFactory;
}
