<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historia;

use Artesaos\SEOTools\Facades\SEOTools;

class HistoriaFrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        SEOTools::setTitle('Historia Alacer Mas');

        $histories = Historia::orderBy('any')->get();
        
        return view('frontend.historia.index', compact('histories'));
    }

}
