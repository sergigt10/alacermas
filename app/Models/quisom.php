<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quisom extends Model
{
    public $timestamps = false;
    protected $table = 'quisom';

    protected $fillable = [
        'descripcio_esp_pres',
        'descripcio_cat_pres',
        'descripcio_eng_pres',
        'descripcio_fra_pres',
        'descripcio_esp_obje',
        'descripcio_cat_obje',
        'descripcio_eng_obje',
        'descripcio_fra_obje',
        'descripcio_esp_video',
        'descripcio_cat_video',
        'descripcio_eng_video',
        'descripcio_fra_video',
        'imatge_pres1',
        'imatge_pres2',
        'imatge_obje1',
        'imatge_obje2'
    ];
}
