<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producte;
use Illuminate\Http\Request;
use Illuminate\Support\Str as Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class CategoriaProducteController extends Controller
{

    protected $appends = [
        'getParentsTree',
        'getParentsTreeFrontend',
        'formatTree',
        'tree'
    ];

    // Montar arbre de categories amb select
    public static function getParentsTree($category, $title, $type) 
    {
        if($category->parent_id == NULL) {
            return $title;
        }

        $parent = Categoria::find($category->parent_id);
        
        if( $type === 'Backend' ) {
            $title = $parent->nom_cat . ' > ' . $title;
        } else {
            $title = '<a href="'. route("frontend.productes.index", ["categoria" => $parent->slug]) .'">'. translatePHP($parent, 'nom') .'</a>&nbsp; / &nbsp;' . $title;
        }
        
        return self::getParentsTree($parent, $title, $type);
    }

    public static function getParentRoot($category)
    {
        if($category->parent_id == NULL) {
            return $category->slug;
        }
        $parent = Categoria::find($category->parent_id);

        return self::getParentRoot($parent);
    }

    // Montar arbre de categories sense select
    public static function tree() 
    {
        $allCategories = Categoria::orderBy('nom_cat')->get();
        $rootCategories = $allCategories->whereNull('parent_id');
        self::formatTree($rootCategories, $allCategories);

        return $rootCategories;
    }
    public static function formatTree($categories, $allCategories) 
    {
        foreach ($categories as $categoria) {
            $categoria->children = $allCategories->where('parent_id', $categoria->id)->values();

            if($categoria->children->isNotEmpty()) {
                self::formatTree($categoria->children, $allCategories);
            }
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categoria::orderBy('nom_cat')->get();

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
        $categories = Categoria::orderBy('id')->orderBy('nom_cat')->get();

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
            'parent_id' => 'nullable',
            'imatge1' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'actiu' => 'required'
        ]);/* Max foto 10 MB */

        $ruta_imatge1 = $request['imatge1']->store('backend/categories', 'public');

        $imatge1 = Image::make( storage_path("app/public/{$ruta_imatge1}") )->fit(354, 290, function($constraint){$constraint->aspectRatio();});
        $imatge1->save();

        $categoria = new Categoria($data);
        $categoria->slug = Str::of($request['nom_esp'])->slug("-");
        if($request['parent_id'] === ' ') {
            $categoria->parent_id = NULL;
        }
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
        $treeCategories = self::tree();

        return view('backend.categories.show')
            ->with('treeCategories', $treeCategories);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        $categoriesAll = Categoria::orderBy('id')->orderBy('nom_cat')->get();
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
            'parent_id' => 'nullable',
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
        if($request['parent_id'] === ' ') {
            $categoria->parent_id = NULL;
        } else {
            $categoria->parent_id = $data['parent_id'];
        }
        $categoria->actiu = $data['actiu'];

        // Si el usuario sube una nueva imagen
        if($request['imatge1']) {
            $ruta_imatge1 = $request['imatge1']->store('backend/categories', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge1}") )->fit(354, 290, function($constraint){$constraint->aspectRatio();});
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

        $subcategories = $categoria->subCategoria($categoria->id)->get();

        // Assignar subcategories al parent de la categoria que volem eliminar
        if(!$subcategories->isEmpty()) {
            foreach ($subcategories as $subCategoria) {
                $subCategoria->parent_id = $categoria->parent_id;
                $subCategoria->save();
            }
        }
        
        $productesCategoria = Producte::where('categoria_id','=', $categoria->id)->get();

        // Assignar productes al parent de la categoria que volem eliminar
        if(!$productesCategoria->isEmpty()) {
            foreach ($productesCategoria as $producteCategoria) {
                $producteCategoria->categoria_id = $categoria->parent_id;
                $producteCategoria->save();
            }
        }

        $categoria->delete();
        
        return redirect()->action('CategoriaProducteController@index')->with('estat', 'Categoria esborrada correctament');
    }
}
