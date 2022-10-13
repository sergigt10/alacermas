<?php

namespace App\Http\Controllers;

use App\Models\Servei;
use Illuminate\Http\Request;
use Illuminate\Support\Str as Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ServeiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $serveis = Servei::all();

        return view('backend.serveis.index')
            ->with('serveis', $serveis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.serveis.create');
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
            'descripcio_esp_1' => 'required',
            'descripcio_cat_1' => 'required',
            'descripcio_eng_1' => 'required',
            'descripcio_fra_1' => 'required',
            'descripcio_esp_2' => 'required',
            'descripcio_cat_2' => 'required',
            'descripcio_eng_2' => 'required',
            'descripcio_fra_2' => 'required',
            'descripcio_esp_3' => 'required',
            'descripcio_cat_3' => 'required',
            'descripcio_eng_3' => 'required',
            'descripcio_fra_3' => 'required',
            'descripcio_esp_4' => 'required',
            'descripcio_cat_4' => 'required',
            'descripcio_eng_4' => 'required',
            'descripcio_fra_4' => 'required',
            'descripcio_esp_5' => 'required',
            'descripcio_cat_5' => 'required',
            'descripcio_eng_5' => 'required',
            'descripcio_fra_5' => 'required',
            'imatge_desc_1' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge_desc_2' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge_desc_3' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge_desc_4' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge_desc_5' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge_1' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge_2' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge_3' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge_4' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge_5' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge_6' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge_7' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg',
            'imatge_8' => 'required|image|max:10240|mimes:jpeg,png,jpg,gif,svg'
        ]);/* Max foto 10 MB */

        $ruta_imatge_desc_1 = $request['imatge_desc_1']->store('backend/serveis', 'public');
        $ruta_imatge_desc_2 = $request['imatge_desc_2']->store('backend/serveis', 'public');
        $ruta_imatge_desc_3 = $request['imatge_desc_3']->store('backend/serveis', 'public');
        $ruta_imatge_desc_4 = $request['imatge_desc_4']->store('backend/serveis', 'public');
        $ruta_imatge_desc_5 = $request['imatge_desc_5']->store('backend/serveis', 'public');

        $ruta_imatge_1 = $request['imatge_1']->store('backend/serveis', 'public');
        $ruta_imatge_2 = $request['imatge_2']->store('backend/serveis', 'public');
        $ruta_imatge_3 = $request['imatge_3']->store('backend/serveis', 'public');
        $ruta_imatge_4 = $request['imatge_4']->store('backend/serveis', 'public');
        $ruta_imatge_5 = $request['imatge_5']->store('backend/serveis', 'public');
        $ruta_imatge_6 = $request['imatge_6']->store('backend/serveis', 'public');
        $ruta_imatge_7 = $request['imatge_7']->store('backend/serveis', 'public');
        $ruta_imatge_8 = $request['imatge_8']->store('backend/serveis', 'public');

        $imatge_desc_1 = Image::make( storage_path("app/public/{$ruta_imatge_desc_1}") )->fit(525, 294, function($constraint){$constraint->aspectRatio();});
        $imatge_desc_1->save();
        $imatge_desc_2 = Image::make( storage_path("app/public/{$ruta_imatge_desc_2}") )->fit(525, 294, function($constraint){$constraint->aspectRatio();});
        $imatge_desc_2->save();
        $imatge_desc_3 = Image::make( storage_path("app/public/{$ruta_imatge_desc_3}") )->fit(525, 294, function($constraint){$constraint->aspectRatio();});
        $imatge_desc_3->save();
        $imatge_desc_4 = Image::make( storage_path("app/public/{$ruta_imatge_desc_4}") )->fit(525, 294, function($constraint){$constraint->aspectRatio();});
        $imatge_desc_4->save();
        $imatge_desc_5 = Image::make( storage_path("app/public/{$ruta_imatge_desc_5}") )->fit(525, 294, function($constraint){$constraint->aspectRatio();});
        $imatge_desc_5->save();

        $imatge_1 = Image::make( storage_path("app/public/{$ruta_imatge_1}") )->fit(800, 485, function($constraint){$constraint->aspectRatio();});
        $imatge_1->save();
        $imatge_2 = Image::make( storage_path("app/public/{$ruta_imatge_2}") )->fit(800, 485, function($constraint){$constraint->aspectRatio();});
        $imatge_2->save();
        $imatge_3 = Image::make( storage_path("app/public/{$ruta_imatge_3}") )->fit(800, 485, function($constraint){$constraint->aspectRatio();});
        $imatge_3->save();
        $imatge_4 = Image::make( storage_path("app/public/{$ruta_imatge_4}") )->fit(800, 485, function($constraint){$constraint->aspectRatio();});
        $imatge_4->save();
        $imatge_5 = Image::make( storage_path("app/public/{$ruta_imatge_5}") )->fit(800, 485, function($constraint){$constraint->aspectRatio();});
        $imatge_5->save();
        $imatge_6 = Image::make( storage_path("app/public/{$ruta_imatge_6}") )->fit(800, 485, function($constraint){$constraint->aspectRatio();});
        $imatge_6->save();
        $imatge_7 = Image::make( storage_path("app/public/{$ruta_imatge_7}") )->fit(800, 485, function($constraint){$constraint->aspectRatio();});
        $imatge_7->save();
        $imatge_8 = Image::make( storage_path("app/public/{$ruta_imatge_8}") )->fit(800, 485, function($constraint){$constraint->aspectRatio();});
        $imatge_8->save();

        $servei = new Servei($data);
        $servei->imatge_desc_1 = $ruta_imatge_desc_1;
        $servei->imatge_desc_2 = $ruta_imatge_desc_2;
        $servei->imatge_desc_3 = $ruta_imatge_desc_3;
        $servei->imatge_desc_4 = $ruta_imatge_desc_4;
        $servei->imatge_desc_5 = $ruta_imatge_desc_5;

        $servei->imatge_1 = $ruta_imatge_1;
        $servei->imatge_2 = $ruta_imatge_2;
        $servei->imatge_3 = $ruta_imatge_3;
        $servei->imatge_4 = $ruta_imatge_4;
        $servei->imatge_5 = $ruta_imatge_5;
        $servei->imatge_6 = $ruta_imatge_6;
        $servei->imatge_7 = $ruta_imatge_7;
        $servei->imatge_8 = $ruta_imatge_8;
        $servei->save();

        // Redireccionar
        return redirect()->action('ServeiController@index')->with('estat', 'Servei creat correctament');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servei  $servei
     * @return \Illuminate\Http\Response
     */
    public function show(Servei $servei)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servei  $servei
     * @return \Illuminate\Http\Response
     */
    public function edit(Servei $servei)
    {
        return view('backend.serveis.edit', compact('servei'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servei  $servei
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servei $servei)
    {
        // Validació
        $data = $request->validate([
            'descripcio_esp_1' => 'required',
            'descripcio_cat_1' => 'required',
            'descripcio_eng_1' => 'required',
            'descripcio_fra_1' => 'required',
            'descripcio_esp_2' => 'required',
            'descripcio_cat_2' => 'required',
            'descripcio_eng_2' => 'required',
            'descripcio_fra_2' => 'required',
            'descripcio_esp_3' => 'required',
            'descripcio_cat_3' => 'required',
            'descripcio_eng_3' => 'required',
            'descripcio_fra_3' => 'required',
            'descripcio_esp_4' => 'required',
            'descripcio_cat_4' => 'required',
            'descripcio_eng_4' => 'required',
            'descripcio_fra_4' => 'required',
            'descripcio_esp_5' => 'required',
            'descripcio_cat_5' => 'required',
            'descripcio_eng_5' => 'required',
            'descripcio_fra_5' => 'required'
        ]);
        
        // Asignar los valores
        $servei->descripcio_esp_1 = $data['descripcio_esp_1'];
        $servei->descripcio_cat_1 = $data['descripcio_cat_1'];
        $servei->descripcio_eng_1 = $data['descripcio_eng_1'];
        $servei->descripcio_fra_1 = $data['descripcio_fra_1'];

        $servei->descripcio_esp_2 = $data['descripcio_esp_2'];
        $servei->descripcio_cat_2 = $data['descripcio_cat_2'];
        $servei->descripcio_eng_2 = $data['descripcio_eng_2'];
        $servei->descripcio_fra_2 = $data['descripcio_fra_2'];

        $servei->descripcio_esp_3 = $data['descripcio_esp_3'];
        $servei->descripcio_cat_3 = $data['descripcio_cat_3'];
        $servei->descripcio_eng_3 = $data['descripcio_eng_3'];
        $servei->descripcio_fra_3 = $data['descripcio_fra_3'];

        $servei->descripcio_esp_4 = $data['descripcio_esp_4'];
        $servei->descripcio_cat_4 = $data['descripcio_cat_4'];
        $servei->descripcio_eng_4 = $data['descripcio_eng_4'];
        $servei->descripcio_fra_4 = $data['descripcio_fra_4'];

        $servei->descripcio_esp_5 = $data['descripcio_esp_5'];
        $servei->descripcio_cat_5 = $data['descripcio_cat_5'];
        $servei->descripcio_eng_5 = $data['descripcio_eng_5'];
        $servei->descripcio_fra_5 = $data['descripcio_fra_5'];

        // Si el usuario sube una nueva imagen
        if($request['imatge_desc_1']) {

            $ruta_imatge_desc_1 = $request['imatge_desc_1']->store('backend/serveis', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge_desc_1}") )->fit(525, 294, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$servei->imatge_desc_1"))) {
                File::delete(storage_path("app/public/$servei->imatge_desc_1"));
                // Asignar al objeto
                $servei->imatge_desc_1 = $ruta_imatge_desc_1;
            }  
        }
        if($request['imatge_desc_2']) {

            $ruta_imatge_desc_2 = $request['imatge_desc_2']->store('backend/serveis', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge_desc_2}") )->fit(525, 294, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$servei->imatge_desc_2"))) {
                File::delete(storage_path("app/public/$servei->imatge_desc_2"));
                // Asignar al objeto
                $servei->imatge_desc_2 = $ruta_imatge_desc_2;
            }  
        }
        if($request['imatge_desc_3']) {

            $ruta_imatge_desc_3 = $request['imatge_desc_3']->store('backend/serveis', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge_desc_3}") )->fit(525, 294, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$servei->imatge_desc_3"))) {
                File::delete(storage_path("app/public/$servei->imatge_desc_3"));
                // Asignar al objeto
                $servei->imatge_desc_3 = $ruta_imatge_desc_3;
            }  
        }
        if($request['imatge_desc_4']) {

            $ruta_imatge_desc_4 = $request['imatge_desc_4']->store('backend/serveis', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge_desc_4}") )->fit(525, 294, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$servei->imatge_desc_4"))) {
                File::delete(storage_path("app/public/$servei->imatge_desc_4"));
                // Asignar al objeto
                $servei->imatge_desc_4 = $ruta_imatge_desc_4;
            }  
        }
        if($request['imatge_desc_5']) {

            $ruta_imatge_desc_5 = $request['imatge_desc_5']->store('backend/serveis', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge_desc_5}") )->fit(525, 294, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$servei->imatge_desc_5"))) {
                File::delete(storage_path("app/public/$servei->imatge_desc_5"));
                // Asignar al objeto
                $servei->imatge_desc_5 = $ruta_imatge_desc_5;
            }  
        }

        if($request['imatge_1']) {

            $ruta_imatge_1 = $request['imatge_1']->store('backend/serveis', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge_1}") )->fit(800, 485, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$servei->imatge_1"))) {
                File::delete(storage_path("app/public/$servei->imatge_1"));
                // Asignar al objeto
                $servei->imatge_1 = $ruta_imatge_1;
            }  
        }
        if($request['imatge_2']) {

            $ruta_imatge_2 = $request['imatge_2']->store('backend/serveis', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge_2}") )->fit(800, 485, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$servei->imatge_2"))) {
                File::delete(storage_path("app/public/$servei->imatge_2"));
                // Asignar al objeto
                $servei->imatge_2 = $ruta_imatge_2;
            }  
        }
        if($request['imatge_3']) {

            $ruta_imatge_3 = $request['imatge_3']->store('backend/serveis', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge_3}") )->fit(800, 485, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$servei->imatge_3"))) {
                File::delete(storage_path("app/public/$servei->imatge_3"));
                // Asignar al objeto
                $servei->imatge_3 = $ruta_imatge_3;
            }  
        }
        if($request['imatge_4']) {

            $ruta_imatge_4 = $request['imatge_4']->store('backend/serveis', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge_4}") )->fit(800, 485, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$servei->imatge_4"))) {
                File::delete(storage_path("app/public/$servei->imatge_4"));
                // Asignar al objeto
                $servei->imatge_4 = $ruta_imatge_4;
            }  
        }
        if($request['imatge_5']) {

            $ruta_imatge_5 = $request['imatge_5']->store('backend/serveis', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge_5}") )->fit(800, 485, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$servei->imatge_5"))) {
                File::delete(storage_path("app/public/$servei->imatge_5"));
                // Asignar al objeto
                $servei->imatge_5 = $ruta_imatge_5;
            }  
        }
        if($request['imatge_6']) {

            $ruta_imatge_6 = $request['imatge_6']->store('backend/serveis', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge_6}") )->fit(800, 485, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$servei->imatge_6"))) {
                File::delete(storage_path("app/public/$servei->imatge_6"));
                // Asignar al objeto
                $servei->imatge_6 = $ruta_imatge_6;
            }  
        }
        if($request['imatge_7']) {

            $ruta_imatge_7 = $request['imatge_7']->store('backend/serveis', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge_7}") )->fit(800, 485, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$servei->imatge_7"))) {
                File::delete(storage_path("app/public/$servei->imatge_7"));
                // Asignar al objeto
                $servei->imatge_7 = $ruta_imatge_7;
            }  
        }
        if($request['imatge_8']) {

            $ruta_imatge_8 = $request['imatge_8']->store('backend/serveis', 'public');

            $img = Image::make( storage_path("app/public/{$ruta_imatge_8}") )->fit(800, 485, function($constraint){$constraint->aspectRatio();});
            $img->save();

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$servei->imatge_8"))) {
                File::delete(storage_path("app/public/$servei->imatge_8"));
                // Asignar al objeto
                $servei->imatge_8 = $ruta_imatge_8;
            }  
        }
        

        $servei->save();

        // Redireccionar
        return redirect()->action('ServeiController@index')->with('estat', 'Servei modificat correctament');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servei  $servei
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servei $servei)
    {
        // Eliminar imatges
        if (File::exists(storage_path("app/public/$servei->imatge_desc_1"))) {
            File::delete(storage_path("app/public/$servei->imatge_desc_1"));
        }
        if (File::exists(storage_path("app/public/$servei->imatge_desc_2"))) {
            File::delete(storage_path("app/public/$servei->imatge_desc_2"));
        }
        if (File::exists(storage_path("app/public/$servei->imatge_desc_3"))) {
            File::delete(storage_path("app/public/$servei->imatge_desc_3"));
        }
        if (File::exists(storage_path("app/public/$servei->imatge_desc_4"))) {
            File::delete(storage_path("app/public/$servei->imatge_desc_4"));
        }
        if (File::exists(storage_path("app/public/$servei->imatge_desc_5"))) {
            File::delete(storage_path("app/public/$servei->imatge_desc_5"));
        }

        if (File::exists(storage_path("app/public/$servei->imatge_1"))) {
            File::delete(storage_path("app/public/$servei->imatge_1"));
        }
        if (File::exists(storage_path("app/public/$servei->imatge_2"))) {
            File::delete(storage_path("app/public/$servei->imatge_2"));
        }
        if (File::exists(storage_path("app/public/$servei->imatge_3"))) {
            File::delete(storage_path("app/public/$servei->imatge_3"));
        }
        if (File::exists(storage_path("app/public/$servei->imatge_4"))) {
            File::delete(storage_path("app/public/$servei->imatge_4"));
        }
        if (File::exists(storage_path("app/public/$servei->imatge_5"))) {
            File::delete(storage_path("app/public/$servei->imatge_5"));
        }
        if (File::exists(storage_path("app/public/$servei->imatge_6"))) {
            File::delete(storage_path("app/public/$servei->imatge_6"));
        }
        if (File::exists(storage_path("app/public/$servei->imatge_7"))) {
            File::delete(storage_path("app/public/$servei->imatge_7"));
        }
        if (File::exists(storage_path("app/public/$servei->imatge_8"))) {
            File::delete(storage_path("app/public/$servei->imatge_8"));
        }

        $servei->delete();
        
        return redirect()->action('ServeiController@index');
    }
}
