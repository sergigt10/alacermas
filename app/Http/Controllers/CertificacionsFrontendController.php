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
        SEOTools::setTitle('Certificacions Alacermas');

        $certificacions = Certificacio::first();
        
        return view('frontend.certificacions.index', compact('certificacions'));
    }

}
