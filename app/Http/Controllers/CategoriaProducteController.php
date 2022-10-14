<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Str as Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class CategoriaProducteController extends Controller
{

    protected $appends = [
        'getParentsTree'
    ];

    // Montar arbre de categories
    public static function getParentsTree($category, $title) {
        if($category->id_categoria_mare == 0) {
            return $title;
        }
        $parent = Categoria::find($category->id_categoria_mare);
        $title = $parent->nom_cat . '>' . $title;
        return CategoriaProducteController::getParentsTree($parent, $title);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categoria::all();

        return view('backend.categories.index')
            ->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categoria::all();

        return view('backend.categories.create')
            ->with('categories', $categories);
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
            'id_categoria_mare' => 'required',
            'imatge1' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'actiu' => 'required'
        ]);/* Max foto 10 MB */

        $ruta_imatge1 = $request['imatge1']->store('backend/categories', 'public');

        $imatge1 = Image::make( storage_path("app/public/{$ruta_imatge1}") )->fit(972, 570, function($constraint){$constraint->aspectRatio();});
        $imatge1->save();

        $categoria = new Categoria($data);
        $categoria->slug = Str::of($request['nom_esp'])->slug("-");
        $categoria->imatge1 = $ruta_imatge1;
        $categoria->save();

        // Redireccionar
        return redirect()->action('CategoriaProducteController@index')->with('estat', 'Categoria creada correctament');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        $categoriesAll = Categoria::all();
        return view('backend.categories.edit', compact('categoria'))->with('categoriesAll', $categoriesAll);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        // Validació
        $data = $request->validate([
            'nom_esp' => 'required',
            'nom_cat' => 'required',
            'nom_eng' => 'required',
            'nom_fra' => 'required',
            'id_categoria_mare' => 'required',
            'actiu' => 'required'
        ]);
        
        // Si canviem el nom actualitzem slug
        if($categoria->nom_esp !== $data['nom_esp']) {
            $categoria->slug = Str::of($request['nom_esp'])->slug("-");
        }
        // Asignar los valores
        $categoria->nom_esp = $data['nom_esp'];
        $categoria->nom_cat = $data['nom_cat'];
        $categoria->nom_eng = $data['nom_eng'];
        $categoria->nom_fra = $data['nom_fra'];
        $categoria->id_categoria_mare = $data['id_categoria_mare'];
        $categoria->actiu = $data['actiu'];

        // Si el usuario sube una nueva imagen
        if($request['imatge1']) {
            $ruta_imatge1 = $request['imatge1']->store('backend/categories', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge1}") )->fit(972, 570, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$categoria->imatge1"))) {
                File::delete(storage_path("app/public/$categoria->imatge1"));
                // Asignar al objeto
                $categoria->imatge1 = $ruta_imatge1;
            }  
        }

        $categoria->save();

        // Redireccionar
        return redirect()->action('CategoriaProducteController@index')->with('estat', 'Categoria modificada correctament');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        // Eliminar imatges
        if (File::exists(storage_path("app/public/$categoria->imatge1"))) {
            File::delete(storage_path("app/public/$categoria->imatge1"));
        }

        $categoria->delete();
        
        return redirect()->action('CategoriaProducteController@index');
    }
}
