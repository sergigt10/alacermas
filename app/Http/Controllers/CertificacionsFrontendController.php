<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificacio;

use Artesaos\SEOTools\Facades\SEOTools;

class CertificacionsFrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        SEOTools::setTitle('Certificacions Alacer Mas, Aluminio centro de distribución');
        SEOTools::setDescription('Certificados bajo la norma ISO 9001:2015 para la distribución, comercialización y transformación de materiales de acero inoxidable y aluminio');

        $certificacions = Certificacio::first();
        
        return view('frontend.certificacions.index', compact('certificacions'));
    }

}
