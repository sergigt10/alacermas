<?php

namespace App\Http\Controllers;

use App\Models\Producte;
use App\Models\Taula;
use Illuminate\Http\Request;
use Illuminate\Support\Str as Str;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class TaulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taules = Taula::all();

        return view('backend.taules.index')
            ->with('taules', $taules);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productes = Producte::all();

        return view('backend.taules.create')
            ->with('productes', $productes);
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
            'producte_id' => 'required',
            'excel' => 'required|max:50000|mimes:xlsx,xls,csv,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'files_th_excel' => 'required'
        ]);/* Max foto 50 MB */

        $ruta_excel = $request['excel']->store('backend/productes/excel', 'public');

        $taula = new Taula($data);
        $taula->excel = $ruta_excel;
        $taula->save();

        // Redireccionar
        return redirect()->action('TaulaController@index')->with('estat', 'Taula creada correctament');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Taula  $taula
     * @return \Illuminate\Http\Response
     */
    public function show(Taula $taula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Taula  $taula
     * @return \Illuminate\Http\Response
     */
    public function edit(Taula $taula)
    {
        $productes = Producte::all();

        return view('backend.taules.edit', compact('taula'))
            ->with('productes', $productes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Taula  $taula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Taula $taula)
    {
        // Validació
        $data = $request->validate([
            'producte_id' => 'required',
            'files_th_excel' => 'required',
        ]);
        
        // Asignar los valores
        $taula->producte_id = $data['producte_id'];
        $taula->files_th_excel = $data['files_th_excel'];

        // Si el usuario sube una nueva imagen
        if($request['excel']) {
            $ruta_excel = $request['excel']->store('backend/productes/excel', 'public');

            // Eliminamos la imagen anterior
            if (File::exists(storage_path("app/public/$taula->excel"))) {
                File::delete(storage_path("app/public/$taula->excel"));
                // Asignar al objeto
                $taula->excel = $ruta_excel;
            }  
        }

        $taula->save();

        // Redireccionar
        return redirect()->action('TaulaController@index')->with('estat', 'Taula modificada correctament');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Taula  $taula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Taula $taula)
    {
        // Eliminar imatges
        if (File::exists(storage_path("app/public/$taula->excel"))) {
            File::delete(storage_path("app/public/$taula->excel"));
        }

        $taula->delete();
        
        return redirect()->action('TaulaController@index');
    }
}
