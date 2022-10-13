<?php

namespace App\Http\Controllers;

use App\Models\Centre;
use Illuminate\Http\Request;
use Illuminate\Support\Str as Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class CentreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centres = Centre::all();

        return view('backend.centres.index')
            ->with('centres', $centres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.centres.create');
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
            'titol_esp' => 'required',
            'titol_cat' => 'required',
            'titol_eng' => 'required',
            'titol_fra' => 'required',
            'descripcio_esp' => 'required',
            'descripcio_cat' => 'required',
            'descripcio_eng' => 'required',
            'descripcio_fra' => 'required',
            'localitzacio' => 'required',
            'imatge1' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg'
        ]);/* Max foto 10 MB */

        $ruta_imatge1 = $request['imatge1']->store('backend/centres', 'public');

        $imatge1 = Image::make( storage_path("app/public/{$ruta_imatge1}") )->fit(972, 570, function($constraint){$constraint->aspectRatio();});
        $imatge1->save();

        $centre = new Centre($data);
        $centre->slug = Str::of($request['titol_esp'])->slug("-");
        $centre->imatge1 = $ruta_imatge1;
        $centre->save();

        // Redireccionar
        return redirect()->action('CentreController@index')->with('estat', 'Centre creat correctament');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Centre  $centre
     * @return \Illuminate\Http\Response
     */
    public function show(Centre $centre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Centre  $centre
     * @return \Illuminate\Http\Response
     */
    public function edit(Centre $centre)
    {
        return view('backend.centres.edit', compact('centre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Centre  $centre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Centre $centre)
    {
        // Validació
        $data = $request->validate([
            'titol_esp' => 'required',
            'titol_cat' => 'required',
            'titol_eng' => 'required',
            'titol_fra' => 'required',
            'descripcio_esp' => 'required',
            'descripcio_cat' => 'required',
            'descripcio_eng' => 'required',
            'descripcio_fra' => 'required',
            'localitzacio' => 'required'
        ]);
        
        // Si canviem el nom actualitzem slug
        if($centre->titol_esp !== $data['titol_esp']) {
            $centre->slug = Str::of($request['titol_esp'])->slug("-");
        }
        // Asignar los valores
        $centre->titol_esp = $data['titol_esp'];
        $centre->titol_cat = $data['titol_cat'];
        $centre->titol_eng = $data['titol_eng'];
        $centre->titol_fra = $data['titol_fra'];
        $centre->descripcio_esp = $data['descripcio_esp'];
        $centre->descripcio_cat = $data['descripcio_cat'];
        $centre->descripcio_eng = $data['descripcio_eng'];
        $centre->descripcio_fra = $data['descripcio_fra'];
        $centre->localitzacio = $data['localitzacio'];

        // Si el usuario sube una nueva imagen
        if($request['imatge1']) {

            $ruta_imatge1 = $request['imatge1']->store('backend/centres', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge1}") )->fit(972, 570, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$centre->imatge1"))) {
                File::delete(storage_path("app/public/$centre->imatge1"));
                // Asignar al objeto
                $centre->imatge1 = $ruta_imatge1;
            }  
        }

        $centre->save();

        // Redireccionar
        return redirect()->action('CentreController@index')->with('estat', 'Centre modificat correctament');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Centre  $centre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Centre $centre)
    {
        // Eliminar imatges
        if (File::exists(storage_path("app/public/$centre->imatge1"))) {
            File::delete(storage_path("app/public/$centre->imatge1"));
        }

        $centre->delete();
        
        return redirect()->action('CentreController@index');
    }
}
