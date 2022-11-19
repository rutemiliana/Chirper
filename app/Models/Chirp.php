<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;

    //bloqueia a atribuição em massa. Somente este campo(message) é preenchível 
    protected $fillable = [
        'message',
    ];
}
