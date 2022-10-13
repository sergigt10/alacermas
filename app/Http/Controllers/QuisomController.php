<?php

namespace App\Http\Controllers;

use App\Models\Quisom;
use Illuminate\Http\Request;
use Illuminate\Support\Str as Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class QuisomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quisoms = Quisom::all();

        return view('backend.quisoms.index')
            ->with('quisoms', $quisoms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.quisoms.create');
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
            'descripcio_esp_pres' => 'required',
            'descripcio_cat_pres' => 'required',
            'descripcio_eng_pres' => 'required',
            'descripcio_fra_pres' => 'required',
            'descripcio_esp_obje' => 'required',
            'descripcio_cat_obje' => 'required',
            'descripcio_eng_obje' => 'required',
            'descripcio_fra_obje' => 'required',
            'descripcio_esp_video' => 'required',
            'descripcio_cat_video' => 'required',
            'descripcio_eng_video' => 'required',
            'descripcio_fra_video' => 'required',
            'imatge_pres1' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge_pres2' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge_obje1' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge_obje2' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
        ]);/* Max foto 10 MB */

        $ruta_imatge_pres1 = $request['imatge_pres1']->store('backend/quisoms', 'public');
        $ruta_imatge_pres2 = $request['imatge_pres2']->store('backend/quisoms', 'public');
        $ruta_imatge_obje1 = $request['imatge_obje1']->store('backend/quisoms', 'public');
        $ruta_imatge_obje2 = $request['imatge_obje2']->store('backend/quisoms', 'public');

        $imatge_pres1 = Image::make( storage_path("app/public/{$ruta_imatge_pres1}") )->fit(413, 560, function($constraint){$constraint->aspectRatio();});
        $imatge_pres1->save();
        $imatge_pres2 = Image::make( storage_path("app/public/{$ruta_imatge_pres2}") )->fit(280, 340, function($constraint){$constraint->aspectRatio();});
        $imatge_pres2->save();
        $imatge_obje1 = Image::make( storage_path("app/public/{$ruta_imatge_obje1}") )->fit(465, 261, function($constraint){$constraint->aspectRatio();});
        $imatge_obje1->save();
        $imatge_obje2 = Image::make( storage_path("app/public/{$ruta_imatge_obje2}") )->fit(465, 261, function($constraint){$constraint->aspectRatio();});
        $imatge_obje2->save();

        $quisom = new Quisom($data);
        $quisom->imatge_pres1 = $ruta_imatge_pres1;
        $quisom->imatge_pres2 = $ruta_imatge_pres2;
        $quisom->imatge_obje1 = $ruta_imatge_obje1;
        $quisom->imatge_obje2 = $ruta_imatge_obje2;
        $quisom->save();

        // Redireccionar
        return redirect()->action('QuisomController@index')->with('estat', 'Qui som creat correctament');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quisom  $quisom
     * @return \Illuminate\Http\Response
     */
    public function show(Quisom $quisom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quisom  $quisom
     * @return \Illuminate\Http\Response
     */
    public function edit(Quisom $quisom)
    {
        return view('backend.quisoms.edit', compact('quisom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quisom  $quisom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quisom $quisom)
    {
        // Validació
        $data = $request->validate([
            'descripcio_esp_pres' => 'required',
            'descripcio_cat_pres' => 'required',
            'descripcio_eng_pres' => 'required',
            'descripcio_fra_pres' => 'required',
            'descripcio_esp_obje' => 'required',
            'descripcio_cat_obje' => 'required',
            'descripcio_eng_obje' => 'required',
            'descripcio_fra_obje' => 'required',
            'descripcio_esp_video' => 'required',
            'descripcio_cat_video' => 'required',
            'descripcio_eng_video' => 'required',
            'descripcio_fra_video' => 'required'
        ]);
        
        // Asignar los valores
        $quisom->descripcio_esp_pres = $data['descripcio_esp_pres'];
        $quisom->descripcio_cat_pres = $data['descripcio_cat_pres'];
        $quisom->descripcio_eng_pres = $data['descripcio_eng_pres'];
        $quisom->descripcio_fra_pres = $data['descripcio_fra_pres'];
        $quisom->descripcio_esp_obje = $data['descripcio_esp_obje'];
        $quisom->descripcio_cat_obje = $data['descripcio_cat_obje'];
        $quisom->descripcio_eng_obje = $data['descripcio_eng_obje'];
        $quisom->descripcio_fra_obje = $data['descripcio_fra_obje'];
        $quisom->descripcio_esp_video = $data['descripcio_esp_video'];
        $quisom->descripcio_cat_video = $data['descripcio_cat_video'];
        $quisom->descripcio_eng_video = $data['descripcio_eng_video'];
        $quisom->descripcio_fra_video = $data['descripcio_fra_video'];

        // Si el usuario sube una nueva imagen
        if($request['imatge_pres1']) {

            $ruta_imatge_pres1 = $request['imatge_pres1']->store('backend/quisoms', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge_pres1}") )->fit(413, 560, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$quisom->imatge_pres1"))) {
                File::delete(storage_path("app/public/$quisom->imatge_pres1"));
                // Asignar al objeto
                $quisom->imatge_pres1 = $ruta_imatge_pres1;
            }  
        }

        if($request['imatge_pres2']) {

            $ruta_imatge_pres2 = $request['imatge_pres2']->store('backend/quisoms', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge_pres2}") )->fit(280, 340, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$quisom->imatge_pres2"))) {
                File::delete(storage_path("app/public/$quisom->imatge_pres2"));
                // Asignar al objeto
                $quisom->imatge_pres2 = $ruta_imatge_pres2;
            }  
        }

        if($request['imatge_obje1']) {

            $ruta_imatge_obje1 = $request['imatge_obje1']->store('backend/quisoms', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge_obje1}") )->fit(280, 340, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$quisom->imatge_obje1"))) {
                File::delete(storage_path("app/public/$quisom->imatge_obje1"));
                // Asignar al objeto
                $quisom->imatge_obje1 = $ruta_imatge_obje1;
            }  
        }

        if($request['imatge_obje2']) {

            $ruta_imatge_obje2 = $request['imatge_obje2']->store('backend/quisoms', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge_obje2}") )->fit(465, 261, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$quisom->imatge_obje2"))) {
                File::delete(storage_path("app/public/$quisom->imatge_obje2"));
                // Asignar al objeto
                $quisom->imatge_obje2 = $ruta_imatge_obje2;
            }  
        }

        $quisom->save();

        // Redireccionar
        return redirect()->action('QuisomController@index')->with('estat', 'Qui som modificat correctament');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quisom  $quisom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quisom $quisom)
    {
        // Eliminar imatges
        if (File::exists(storage_path("app/public/$quisom->imatge_pres1"))) {
            File::delete(storage_path("app/public/$quisom->imatge_pres1"));
        }
        if (File::exists(storage_path("app/public/$quisom->imatge_pres2"))) {
            File::delete(storage_path("app/public/$quisom->imatge_pres2"));
        }
        if (File::exists(storage_path("app/public/$quisom->imatge_obje1"))) {
            File::delete(storage_path("app/public/$quisom->imatge_obje1"));
        }
        if (File::exists(storage_path("app/public/$quisom->imatge_obje2"))) {
            File::delete(storage_path("app/public/$quisom->imatge_obje2"));
        }

        $quisom->delete();
        
        return redirect()->action('QuisomController@index');
    }
}
