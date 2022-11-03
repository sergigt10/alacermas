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
        'parent_id',
        'imatge1',
        'actiu'
    ];

    public function isChild():bool
    {
        return $this->parent_id !== null;
    }

    public function scopeSubCategoria($query, $categoria_id)
    {
        return $query->where('parent_id', '=', $categoria_id)->where('actiu','=',1);
    }
}
