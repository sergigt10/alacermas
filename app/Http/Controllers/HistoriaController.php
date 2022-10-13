<?php

namespace App\Http\Controllers;

use App\Models\Historia;
use Illuminate\Http\Request;
use Illuminate\Support\Str as Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class HistoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $histories = Historia::all();

        return view('backend.histories.index')
            ->with('histories', $histories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.histories.create');
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
            'any' => 'nullable',
            'titol_esp' => 'required',
            'titol_cat' => 'required',
            'titol_eng' => 'required',
            'titol_fra' => 'required',
            'descripcio_esp' => 'required',
            'descripcio_cat' => 'required',
            'descripcio_eng' => 'required',
            'descripcio_fra' => 'required',
            'imatge1' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg'
        ]);/* Max foto 10 MB */

        $ruta_imatge1 = $request['imatge1']->store('backend/histories', 'public');

        $imatge1 = Image::make( storage_path("app/public/{$ruta_imatge1}") )->fit(430, 240, function($constraint){$constraint->aspectRatio();});
        $imatge1->save();

        $historia = new Historia($data);
        $historia->slug = Str::of($request['titol_esp'])->slug("-");
        $historia->imatge1 = $ruta_imatge1;
        $historia->save();

        // Redireccionar
        return redirect()->action('HistoriaController@index')->with('estat', 'Historia creada correctament');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Historia  $historia
     * @return \Illuminate\Http\Response
     */
    public function show(Historia $historia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Historia  $historia
     * @return \Illuminate\Http\Response
     */
    public function edit(Historia $historia)
    {
        return view('backend.histories.edit', compact('historia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Historia  $historia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Historia $historia)
    {
        // Validació
        $data = $request->validate([
            'any' => 'nullable',
            'titol_esp' => 'required',
            'titol_cat' => 'required',
            'titol_eng' => 'required',
            'titol_fra' => 'required',
            'descripcio_esp' => 'required',
            'descripcio_cat' => 'required',
            'descripcio_eng' => 'required',
            'descripcio_fra' => 'required'
        ]);
        
        // Si canviem el nom actualitzem slug
        if($historia->titol_esp !== $data['titol_esp']) {
            $historia->slug = Str::of($request['titol_esp'])->slug("-");
        }
        // Asignar los valores
        $historia->any = $data['any'];
        $historia->titol_esp = $data['titol_esp'];
        $historia->titol_cat = $data['titol_cat'];
        $historia->titol_eng = $data['titol_eng'];
        $historia->titol_fra = $data['titol_fra'];
        $historia->descripcio_esp = $data['descripcio_esp'];
        $historia->descripcio_cat = $data['descripcio_cat'];
        $historia->descripcio_eng = $data['descripcio_eng'];
        $historia->descripcio_fra = $data['descripcio_fra'];

        // Si el usuario sube una nueva imagen
        if($request['imatge1']) {

            $ruta_imatge1 = $request['imatge1']->store('backend/histories', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge1}") )->fit(430, 240, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$historia->imatge1"))) {
                File::delete(storage_path("app/public/$historia->imatge1"));
                // Asignar al objeto
                $historia->imatge1 = $ruta_imatge1;
            }  
        }

        $historia->save();

        // Redireccionar
        return redirect()->action('HistoriaController@index')->with('estat', 'Historia modificada correctament');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Historia  $historia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Historia $historia)
    {
        // Eliminar imatges
        if (File::exists(storage_path("app/public/$historia->imatge1"))) {
            File::delete(storage_path("app/public/$historia->imatge1"));
        }

        $historia->delete();
        
        return redirect()->action('HistoriaController@index');
    }
}
