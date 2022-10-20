<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Taula extends Model
{
    public $timestamps = false;
    protected $table = 'taules';

    protected $fillable = [
        'producte_id',
        'excel',
        'files_th_excel'
    ];

    // Relació 1:n taula i producte
    public function producte()
    {
        return $this->belongsTo(Producte::class, 'producte_id');
    }
}
