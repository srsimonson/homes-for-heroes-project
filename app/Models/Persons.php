<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $fillable = [
        'first_name',
        'last_name',
        'age',
        'phase',
    ];
}
