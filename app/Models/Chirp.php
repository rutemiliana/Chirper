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

    //relationship de chirp com usuario. Um chirp pertence a usuario
    public function user(){
        return $this->belongsTo(User::class);
    }
}
