<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laravel extends Model
{
    use HasFactory;

    protected $table = "aulaslaravel";

    protected $fillable = [
        'titulo',
        'descricao',
        'link',
        'imagem'
    ];

    protected $primaryKey = 'id';
}
