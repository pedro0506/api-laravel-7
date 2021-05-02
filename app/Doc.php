<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    protected $fillable = [
        'codigo', 'nome', 'email', 'celular', 
    ];
}
