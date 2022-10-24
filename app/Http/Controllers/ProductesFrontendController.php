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
    public function index($slug)
    {
        $categoriaParent = Categoria::where('slug','=', $slug)->firstOrFail();

        SEOTools::setTitle('Productes Alacermas, '. $categoriaParent->nom_esp);

        $subCategories = Categoria::subCategoria($categoriaParent->id)->orderBy('nom_esp')->get();
        $productes = Producte::where('categoria_id','=', $categoriaParent->id)->orderBy('nom_esp')->paginate(16, ['*'], 'pagina');

        return view('frontend.productes.index', compact('categoriaParent','subCategories', 'productes'));
    }

    public function show($slug)
    {
        $producte = Producte::where('slug','=', $slug)->firstOrFail();

        SEOTools::setTitle($producte->nom_esp.', Alacer Mas');
        // SEOTools::setDescription(Str::limit(strip_tags($producte->descripcio_esp)), 155, ' (...)');

        return view('frontend.productes.show', compact('producte'));
    }

}
