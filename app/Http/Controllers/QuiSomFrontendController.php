<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quisom;

use Artesaos\SEOTools\Facades\SEOTools;

class QuiSomFrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        SEOTools::setTitle('Distribución acero inoxidable, Normalizados inoxidable');
        SEOTools::setDescription('Alacer Mas, es una empresa fundada hace 4 décadas, formada por un grupo humano de más de 100 profesionales con experiencia e inquietud de mejorar dia a dia');

        $quisom = Quisom::first();
        
        return view('frontend.quisom.index', compact('quisom'));
    }

}
