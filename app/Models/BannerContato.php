<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerContato extends Model
{
    use HasFactory;

    protected $fillable = [
        'imagem',
        'titulo',
        'conteudo',
        'numero',
        'url_numero',
    ];

}
