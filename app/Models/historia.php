<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    public $timestamps = false;
    protected $table = 'historia';

    protected $fillable = [
        'any',
        'titol_esp',
        'titol_cat',
        'titol_eng',
        'titol_fra',
        'descripcio_cat',
        'descripcio_esp',
        'descripcio_eng',
        'descripcio_fra',
        'imatge1'
    ];
}
