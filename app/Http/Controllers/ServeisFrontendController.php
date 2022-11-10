<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servei;

use Artesaos\SEOTools\Facades\SEOTools;

class ServeisFrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        SEOTools::setTitle('Distribución de productos Acero inoxidable, Materias primas');
        SEOTools::setDescription('Alacer Mas cuenta con numerosos medios técnicos y humanos para poder realizar diferentes operaciones, en las materias primas que suministramos');

        $serveis = Servei::first();
        
        return view('frontend.serveis.index', compact('serveis'));
    }

}
