<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallerie extends Model
{
    protected $fillable = ['titre', 'activite_id', 'projet_id', 'sous_acti_id'];
    use HasFactory;
}
