<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //o laravel tenta pegar automaticamente pelo plural, mas neste caso eu seto manualmente
    protected $table = 'room';

    
}
