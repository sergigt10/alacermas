<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servei extends Model
{
    public $timestamps = false;
    protected $table = 'serveis';

    protected $fillable = [
        'descripcio_esp_1',
        'descripcio_cat_1',
        'descripcio_eng_1',
        'descripcio_fra_1',
        'descripcio_esp_2',
        'descripcio_cat_2',
        'descripcio_eng_2',
        'descripcio_fra_2',
        'descripcio_esp_3',
        'descripcio_cat_3',
        'descripcio_eng_3',
        'descripcio_fra_3',
        'descripcio_esp_4',
        'descripcio_cat_4',
        'descripcio_eng_4',
        'descripcio_fra_4',
        'descripcio_esp_5',
        'descripcio_cat_5',
        'descripcio_eng_5',
        'descripcio_fra_5',
        'imatge_desc_1',
        'imatge_desc_2',
        'imatge_desc_3',
        'imatge_desc_4',
        'imatge_desc_5',
        'imatge_1',
        'imatge_2',
        'imatge_3',
        'imatge_4',
        'imatge_5',
        'imatge_6',
        'imatge_7',
        'imatge_8',
    ];
}
