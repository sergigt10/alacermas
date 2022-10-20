<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producte;
use App\Models\Categoria;

use Artesaos\SEOTools\Facades\SEOTools;

class ProductesFrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        SEOTools::setTitle('Productes Alacermas');
        $productes = Producte::orderBy('nom_esp')->get();
        $categories = Categoria::categoriesPrincipals()->orderBy('nom_esp')->get();
        
        return view('frontend.productes.index', compact('productes', 'categories'));
    }


}
