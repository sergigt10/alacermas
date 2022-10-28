<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Centre;

use Artesaos\SEOTools\Facades\SEOTools;

class HomeFrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        SEOTools::setTitle('Alacermas, Acero inoxidable, Aluminio subministros industriales');
        $centres = Centre::orderBy('id')->get();
        
        return view('frontend.inici.index', compact('centres'));
    }

    public function avisLegal()
    {
        SEOTools::setTitle('Aviso legal Alacermas');
        
        return view('frontend.avisLegal.index');
    }

    public function politicaCookies()
    {
        SEOTools::setTitle('Política Cookies Alacermas');
        
        return view('frontend.politicaCookies.index');
    }

    public function politicaPrivacitat()
    {
        SEOTools::setTitle('Política privacidad Alacermas');
        
        return view('frontend.politicaPrivacitat.index');
    }

}
