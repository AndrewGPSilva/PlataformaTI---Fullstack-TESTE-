<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vue extends Model
{
    use HasFactory;

    protected $table = "aulasvue";

    protected $fillable = [
        'titulo',
        'descricao',
        'link',
        'imagem'
    ];

    protected $primaryKey = 'id';
}
