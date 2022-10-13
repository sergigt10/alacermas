<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificacio extends Model
{
    public $timestamps = false;
    protected $table = 'certificacions';

    protected $fillable = [
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
