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
        SEOTools::setTitle('Alacer Mas, Acero inoxidable, Aluminio, subministros industriales');
        SEOTools::setCanonical('https://www.alacermas.com/');
        $centres = Centre::orderBy('id')->get();
        
        return view('frontend.inici.index', compact('centres'));
    }

    public function avisLegal()
    {
        SEOTools::setTitle('Aviso legal Alacer Mas');
        SEOTools::setCanonical('https://www.alacermas.com/');
        
        return view('frontend.avisLegal.index');
    }

    public function politicaCookies()
    {
        SEOTools::setTitle('Política Cookies Alacer Mas');
        SEOTools::setCanonical('https://www.alacermas.com/');
        
        return view('frontend.politicaCookies.index');
    }

    public function politicaPrivacitat()
    {
        SEOTools::setTitle('Política privacidad Alacer Mas');
        SEOTools::setCanonical('https://www.alacermas.com/');
        
        return view('frontend.politicaPrivacitat.index');
    }

}
