<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Centre;

use Artesaos\SEOTools\Facades\SEOTools;

class CentresFrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        SEOTools::setTitle('Centros Alacer Mas, Distribución acero inoxidable');

        $centres = Centre::orderBy('id')->get();
        
        return view('frontend.centres.index', compact('centres'));
    }

}
