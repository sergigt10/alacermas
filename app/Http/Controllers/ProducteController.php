<?php

namespace App\Http\Controllers;

use App\Models\Producte;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Str as Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ProducteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productes = Producte::all();

        return view('backend.productes.index')
            ->with('productes', $productes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productes = Producte::all();
        $treeCategories = \App\Http\Controllers\CategoriaProducteController::tree();

        return view('backend.productes.create')
            ->with('productes', $productes)
            ->with('treeCategories', $treeCategories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nom_esp' => 'required',
            'nom_cat' => 'required',
            'nom_eng' => 'required',
            'nom_fra' => 'required',
            'descripcio_esp' => 'required',
            'descripcio_cat' => 'required',
            'descripcio_eng' => 'required',
            'descripcio_fra' => 'required',
            'categoria_id' => 'required',
            'actiu' => 'required',
            'imatge1' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge2' => 'nullable|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'pdf' => 'nullable|max:10240|mimes:pdf',
        ]);/* Max foto 10 MB */

        $ruta_imatge1 = $request['imatge1']->store('backend/productes', 'public');
        $imatge1 = Image::make( storage_path("app/public/{$ruta_imatge1}") )->fit(354, 290, function($constraint){$constraint->aspectRatio();});
        $imatge1->save();

        if($request['imatge2']) {
            $ruta_imatge2 = $request['imatge2']->store('backend/productes', 'public');
            $imatge2 = Image::make( storage_path("app/public/{$ruta_imatge2}") )->fit(354, 290, function($constraint){$constraint->aspectRatio();});
            $imatge2->save();
        }
        
        if($request['pdf']) {
            $ruta_pdf = $request['pdf']->store('backend/productes/pdf', 'public');
            $imatge2->save();
        }

        $producte = new Producte($data);
        $producte->slug = Str::of($request['nom_esp'])->slug("-");
        $producte->imatge1 = $ruta_imatge1;
        if($request['imatge2']) {
            $producte->imatge2 = $ruta_imatge2;
        }
        if($request['pdf']) {
            $producte->pdf = $ruta_pdf;
        }
        $producte->save();

        // Redireccionar
        return redirect()->action('ProducteController@index')->with('estat', 'Producte creat correctament');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producte  $producte
     * @return \Illuminate\Http\Response
     */
    public function show(Producte $producte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producte  $producte
     * @return \Illuminate\Http\Response
     */
    public function edit(Producte $producte)
    {
        $productes = Producte::all();
        $treeCategories = \App\Http\Controllers\CategoriaProducteController::tree();

        return view('backend.productes.edit', compact('producte'))
            ->with('productes', $productes)
            ->with('treeCategories', $treeCategories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producte  $producte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producte $producte)
    {
        // Validació
        $data = $request->validate([
            'nom_esp' => 'required',
            'nom_cat' => 'required',
            'nom_eng' => 'required',
            'nom_fra' => 'required',
            'descripcio_esp' => 'required',
            'descripcio_cat' => 'required',
            'descripcio_eng' => 'required',
            'descripcio_fra' => 'required',
            'categoria_id' => 'required',
            'actiu' => 'required'
        ]);
        
        // Si canviem el nom actualitzem slug
        if($producte->nom_esp !== $data['nom_esp']) {
            $producte->slug = Str::of($request['nom_esp'])->slug("-");
        }
        // Asignar los valores
        $producte->nom_esp = $data['nom_esp'];
        $producte->nom_cat = $data['nom_cat'];
        $producte->nom_eng = $data['nom_eng'];
        $producte->nom_fra = $data['nom_fra'];
        $producte->descripcio_esp = $data['descripcio_esp'];
        $producte->descripcio_cat = $data['descripcio_cat'];
        $producte->descripcio_eng = $data['descripcio_eng'];
        $producte->descripcio_fra = $data['descripcio_fra'];
        $producte->categoria_id = $data['categoria_id'];
        $producte->actiu = $data['actiu'];

        // Si el usuario sube una nueva imagen
        if($request['imatge1']) {
            $ruta_imatge1 = $request['imatge1']->store('backend/productes', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge1}") )->fit(354, 290, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$producte->imatge1"))) {
                File::delete(storage_path("app/public/$producte->imatge1"));
                // Asignar al objeto
                $producte->imatge1 = $ruta_imatge1;
            }  
        }

        if($request['imatge2']) {
            $ruta_imatge2 = $request['imatge2']->store('backend/productes', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge2}") )->fit(354, 290, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$producte->imatge2"))) {
                File::delete(storage_path("app/public/$producte->imatge2"));
                // Asignar al objeto
                $producte->imatge2 = $ruta_imatge2;
            }  
        }

        if($request['pdf']) {
            $ruta_pdf = $request['pdf']->store('backend/productes/pdf', 'public');

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$producte->pdf"))) {
                File::delete(storage_path("app/public/$producte->pdf"));
                // Asignar al objeto
                $producte->pdf = $ruta_pdf;
            }  
        }

        $producte->save();

        // Redireccionar
        return redirect()->action('ProducteController@index')->with('estat', 'Producte modificat correctament');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producte  $producte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producte $producte)
    {
        // Eliminar imatges
        if (File::exists(storage_path("app/public/$producte->imatge1"))) {
            File::delete(storage_path("app/public/$producte->imatge1"));
        }

        if($producte->taules) {
            /* Eliminar taules excel associades al producte */
            $producte->taules->each(function ($taula) {
                if (File::exists(storage_path("app/public/$taula->excel"))) {
                    File::delete(storage_path("app/public/$taula->excel"));
                }
                $taula->delete();
            });
        }

        $producte->delete();
        
        return redirect()->action('ProducteController@index');
    }
}
