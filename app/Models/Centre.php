<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    public $timestamps = false;
    protected $table = 'centres';

    protected $fillable = [
        'titol_esp',
        'titol_cat',
        'titol_eng',
        'titol_fra',
        'descripcio_cat',
        'descripcio_esp',
        'descripcio_eng',
        'descripcio_fra',
        'localitzacio',
        'imatge1'
    ];
}
