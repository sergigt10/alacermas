<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str as Str;
use PDF;

use App\Models\Producte;
use App\Models\Categoria;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Artesaos\SEOTools\Facades\SEOTools;

class ProductesFrontendController extends Controller
{
    protected $appends = [
        'excelProduct',
        'pdfProduct'
    ];

    public function index($slug)
    {
        $categoriaParent = Categoria::where('slug','=', $slug)->where('actiu','=',1)->firstOrFail();

        SEOTools::setTitle($categoriaParent->nom_esp.', Alacer Mas');

        $subCategories = Categoria::subCategoria($categoriaParent->id)->where('actiu','=',1)->orderBy( trans('nom_esp') )->get();

        if($subCategories->isEmpty()) {
            $subCategories = Categoria::subCategoria($categoriaParent->parent_id)->orderBy( trans('nom_esp') )->get();
        }

        $productes = Producte::where('categoria_id','=', $categoriaParent->id)->where('actiu','=',1)->orderBy( trans('nom_esp') )->get();

        return view('frontend.productes.index', compact('categoriaParent','subCategories', 'productes'));
    }

    public function show($slug)
    {
        $producte = Producte::where('slug','=', $slug)->where('actiu','=',1)->firstOrFail();

        $subCategories = Categoria::subCategoria($producte->categoria_id)->where('actiu','=',1)->orderBy( trans('nom_esp') )->get();

        if($subCategories->isEmpty() && $producte->categoria) {
            $subCategories = Categoria::subCategoria($producte->categoria->parent_id)->orderBy( trans('nom_esp') )->get();
        } else {
            abort(404);
        }

        SEOTools::setTitle($producte->nom_esp.', Alacer Mas');
        SEOTools::setDescription(Str::limit(strip_tags($producte->descripcio_esp)), 155, ' (...)');

        return view('frontend.productes.show', compact('producte', 'subCategories'));
    }

    public function search(Request $request)
    {
        SEOTools::setTitle('Buscador Alacer Mas');

        $buscador = $request->input('buscador');

        if($buscador === null || $buscador === '') {
            abort(404);
        } else {
            $productes = Producte::where('nom_esp','LIKE','%'.$buscador.'%')
                    ->orWhere('nom_cat','LIKE','%'.$buscador.'%')
                    ->orWhere('nom_fra','LIKE','%'.$buscador.'%')
                    ->orWhere('nom_eng','LIKE','%'.$buscador.'%')
                    ->paginate(12, ['*'], 'pagina');
        }
        
        return view('frontend.productes.search', compact('productes'));
    }

    public static function excelProduct($excel, $posicioTitol){
        // (A) PHPSPREADSHEET TO LOAD EXCEL FILE
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($excel);
        $worksheet = $spreadsheet->getActiveSheet();
        $count = 1;
        // (B) LOOP THROUGH ROWS OF CURRENT WORKSHEET
        foreach ($worksheet->getRowIterator() as $row) {
            // (B1) READ CELLS
            $cellIterator = $row->getCellIterator();
            $cellIterator->setIterateOnlyExistingCells(false);
            // (B2) OUTPUT HTML
            $arrayValors = explode(';', $posicioTitol);
            if(in_array((string) $count,$arrayValors)) {
                    echo "<tr class='header-taula'>";
                    foreach ($cellIterator as $key => $cell) {
                        echo "<td><b>". $cell->getValue() ."</b></td>"; }
                    echo "</tr>";
            } else {
                echo "<tr class='content-taula'>";
                foreach ($cellIterator as $key => $cell) {
                    echo "<td>". $cell->getValue() ."</td>"; }
                echo "</tr>";
            }
            $count++;
        }
    }

    public static function pdfProduct($slug){

        $producte = Producte::where('slug','=', $slug)->firstOrFail();

        $pdf = PDF::loadView('frontend.productes.pdf', [
            'titol' => translatePHP($producte, 'nom'),
            'descripcio' => translatePHP($producte, 'descripcio'),
            'imatge1' => $producte->imatge1,
            'imatge2' => $producte->imatge2,
            'taules' => $producte->taules,
        ]);

        return $pdf->download($producte->slug.'.pdf');
    }

}
