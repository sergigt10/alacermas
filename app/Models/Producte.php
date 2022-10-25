<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producte extends Model
{
    public $timestamps = false;
    protected $table = 'productes';

    protected $fillable = [
        'nom_esp',
        'nom_cat',
        'nom_eng',
        'nom_fra',
        'descripcio_esp',
        'descripcio_cat',
        'descripcio_eng',
        'descripcio_fra',
        'slug',
        'categoria_id',
        'actiu',
        'imatge1',
        'imatge2',
        'pdf'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    // Relació 1:n producte i taula (S'utilitza en el destroy)
    public function taules()
    { 
        return $this->hasMany(Taula::class, 'producte_id')->latest('id'); 
    } 

}
