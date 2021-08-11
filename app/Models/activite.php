<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activite extends Model
{
    protected $fillable = ["nom", "detail", "domaine_id"];
    use HasFactory;
}
