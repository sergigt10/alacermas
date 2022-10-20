<?php

namespace App\Http\Controllers;

use App\Models\Certificacio;
use Illuminate\Http\Request;
use Illuminate\Support\Str as Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class CertificacioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificacions = Certificacio::all();

        return view('backend.certificacions.index')
            ->with('certificacions', $certificacions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.certificacions.create');
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
            'imatge1' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg'
        ]);/* Max foto 10 MB */

        if($request['imatge1']){
            $ruta_imatge1 = $request['imatge1']->store('backend/certificacions', 'public');
            $imatge1 = Image::make( storage_path("app/public/{$ruta_imatge1}") )->fit(635, 460, function($constraint){$constraint->aspectRatio();});
            $imatge1->save();
        }

        $certificacio = new Certificacio($data);
        $certificacio->slug = Str::of($request['titol_esp'])->slug("-");
        if($request['imatge1']){
            $certificacio->imatge1 = $ruta_imatge1;
        }
        $certificacio->save();

        // Redireccionar
        return redirect()->action('CertificacioController@index')->with('estat', 'Certificació creada correctament');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certificacio  $certificacio
     * @return \Illuminate\Http\Response
     */
    public function show(Certificacio $certificacio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certificacio  $certificacio
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificacio $certificacio)
    {
        return view('backend.certificacions.edit', compact('certificacio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Certificacio  $certificacio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certificacio $certificacio)
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
            'descripcio_fra' => 'required'
        ]);
        
        // Si canviem el nom actualitzem slug
        if($certificacio->titol_esp !== $data['titol_esp']) {
            $certificacio->slug = Str::of($request['titol_esp'])->slug("-");
        }
        // Asignar los valores
        $certificacio->titol_esp = $data['titol_esp'];
        $certificacio->titol_cat = $data['titol_cat'];
        $certificacio->titol_eng = $data['titol_eng'];
        $certificacio->titol_fra = $data['titol_fra'];
        $certificacio->descripcio_esp = $data['descripcio_esp'];
        $certificacio->descripcio_cat = $data['descripcio_cat'];
        $certificacio->descripcio_eng = $data['descripcio_eng'];
        $certificacio->descripcio_fra = $data['descripcio_fra'];

        // Si el usuario sube una nueva imagen
        if($request['imatge1']) {
            $ruta_imatge1 = $request['imatge1']->store('backend/certificacions', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge1}") )->fit(635, 460, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/certificacio->imatge1"))) {
                File::delete(storage_path("app/public/$certificacio->imatge1"));
                // Asignar al objeto
                $certificacio->imatge1 = $ruta_imatge1;
            }  
        }

        $certificacio->save();

        // Redireccionar
        return redirect()->action('CertificacioController@index')->with('estat', 'Certificació modificada correctament');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certificacio  $certificacio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificacio $certificacio)
    {
        // Eliminar imatges
        if (File::exists(storage_path("app/public/$certificacio->imatge1"))) {
            File::delete(storage_path("app/public/$certificacio->imatge1"));
        }

        $certificacio->delete();
        
        return redirect()->action('CertificacioController@index');
    }
}
