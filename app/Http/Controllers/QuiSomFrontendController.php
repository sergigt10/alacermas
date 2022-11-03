<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quisom;

use Artesaos\SEOTools\Facades\SEOTools;

class QuiSomFrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        SEOTools::setTitle('Quiénes somos Alacer Mas');

        $quisom = Quisom::first();
        
        return view('frontend.quisom.index', compact('quisom'));
    }

}
