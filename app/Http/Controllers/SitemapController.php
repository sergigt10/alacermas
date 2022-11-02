<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producte;
use Illuminate\Support\Carbon;

class SitemapController extends Controller
{
    public function index()
    {
        return response()->view('frontend.sitemap.index')->header('Content-Type', 'text/xml');
    }

    public function statics()
    {
        $startOfMonth = Carbon::now()->startOfMonth()->format('c');
        $statics = [
            '',
            'quienes-somos-alacer-mas',
            'servicios-acero-inoxidable',
            'historia-alacer-mas',
            'certificacions-alacer-mas',
            'trabaja-con-nosotros-alacer-mas',
            'centros-alacer-mas',
            'contacto-alacer-mas'
        ];
        return response()->view('frontend.sitemap.statics', [
            'statics' => $statics,
            'startOfMonth' => $startOfMonth
        ])->header('Content-Type', 'text/xml');
    }

    public function categorias()
    {
        $startOfMonth = Carbon::now()->startOfMonth()->format('c');

        $categorias = Categoria::all();
        return response()->view('frontend.sitemap.categorias', [
            'categorias' => $categorias,
            'startOfMonth' => $startOfMonth
        ])->header('Content-Type', 'text/xml');
    }

    public function productos()
    {
        $startOfMonth = Carbon::now()->startOfMonth()->format('c');

        $productos = Producte::all();
        return response()->view('frontend.sitemap.productos', [
            'productos' => $productos,
            'startOfMonth' => $startOfMonth
        ])->header('Content-Type', 'text/xml');
    }
}
