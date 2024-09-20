<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facts extends Model
{
    use HasFactory;

    protected $fillable = [
        'fact',
        'created_by'
    ];
}
