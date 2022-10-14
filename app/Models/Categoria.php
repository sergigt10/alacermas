<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps = false;
    protected $table = 'categories_productes';

    protected $fillable = [
        'nom_esp',
        'nom_cat',
        'nom_eng',
        'nom_fra',
        'slug',
        'id_categoria_mare',
        'imatge1',
        'actiu'
    ];
}
