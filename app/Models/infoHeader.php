<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infoHeader extends Model
{
    protected $fillable = ['titre', 'descri'];
    use HasFactory;
}
