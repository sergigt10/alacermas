<?php

use Illuminate\Support\Facades\Route;

// FrontEnd //

/* Idiomes */
Route::get('lang/{locale}', [App\Http\Controllers\LocalizationController::class, 'index']);

/* Inici */
Route::get('/', 'HomeFrontendController@index')->name('frontend.inici.index');

/* Historia */
Route::get('/historia', 'HistoriaFrontendController@index')->name('frontend.historia.index');

/* Quiénes somos */
Route::get('/quienes-somos', 'QuiSomFrontendController@index')->name('frontend.quisom.index');

/* Servicios */
Route::get('/servicios', 'ServeisFrontendController@index')->name('frontend.serveis.index');

/* Certificacions */
Route::get('/certificacions', 'CertificacionsFrontendController@index')->name('frontend.certificacions.index');

/* Productos */
Route::get('/productos', 'ProductesFrontendController@index')->name('frontend.productes.index');
Route::get('/categorias/{categoria}', 'ProductesFrontendController@subcategoria')->name('frontend.productes.subcategories');

/* Centros */
Route::get('/centros', 'CentresFrontendController@index')->name('frontend.centres.index');

/* Contacto */
Route::get('/contacto', 'HomeFrontendController@contacte')->name('frontend.contacte.index');

/* treballaAmbNosaltres */
Route::get('/trabaja-con-nosotros', 'HomeFrontendController@treballaAmbNosaltres')->name('frontend.treballaAmbNosaltres.index');

/* Aviso legal */
Route::get('/aviso-legal', 'HomeFrontendController@avisLegal')->name('frontend.avisLegal.index');

/* Política cookies */
Route::get('/politica-cookies', 'HomeFrontendController@politicaCookies')->name('frontend.politicaCookies.index');

/* Política privacitat */
Route::get('/politica-privacidad', 'HomeFrontendController@politicaPrivacitat')->name('frontend.politicaPrivacitat.index');

/* Sitemap */
Route::get('/sitemap.xml', 'SitemapController@index');
Route::get('/sitemap.xml/statics', 'SitemapController@statics');
Route::get('/sitemap.xml/artistes', 'SitemapController@artistes');
Route::get('/sitemap.xml/discos', 'SitemapController@discos');
Route::get('/sitemap.xml/llibres', 'SitemapController@llibres');

// BackEnd //

Auth::routes([
    'register' => false,
    'reset' => false
]);

Route::group(['middleware' => ['auth']], function() {
    /* Inici */
    Route::get('backend/inici', 'HomeBackendController@index')->name('backend.inici.index');
    /* Histories */
    Route::get('backend/histories', 'HistoriaController@index')->name('backend.histories.index');
    Route::get('backend/histories/create', 'HistoriaController@create')->name('backend.histories.create');
    Route::post('backend/histories', 'HistoriaController@store')->name('backend.histories.store');
    Route::get('backend/histories/{historia}/edit', 'HistoriaController@edit')->name('backend.histories.edit');
    Route::put('backend/histories/{historia}', 'HistoriaController@update')->name('backend.histories.update');
    Route::delete('backend/histories/{historia}', 'HistoriaController@destroy')->name('backend.histories.destroy');
    /* Serveis */
    Route::get('backend/serveis', 'ServeiController@index')->name('backend.serveis.index');
    Route::get('backend/serveis/create', 'ServeiController@create')->name('backend.serveis.create');
    Route::post('backend/serveis', 'ServeiController@store')->name('backend.serveis.store');
    Route::get('backend/serveis/{servei}/edit', 'ServeiController@edit')->name('backend.serveis.edit');
    Route::put('backend/serveis/{servei}', 'ServeiController@update')->name('backend.serveis.update');
    Route::delete('backend/serveis/{servei}', 'ServeiController@destroy')->name('backend.serveis.destroy');
    /* Qui som */
    Route::get('backend/quisoms', 'QuisomController@index')->name('backend.quisoms.index');
    Route::get('backend/quisoms/create', 'QuisomController@create')->name('backend.quisoms.create');
    Route::post('backend/quisoms', 'QuisomController@store')->name('backend.quisoms.store');
    Route::get('backend/quisoms/{quisom}/edit', 'QuisomController@edit')->name('backend.quisoms.edit');
    Route::put('backend/quisoms/{quisom}', 'QuisomController@update')->name('backend.quisoms.update');
    Route::delete('backend/quisoms/{quisom}', 'QuisomController@destroy')->name('backend.quisoms.destroy');
    /* Centres */
    Route::get('backend/centres', 'CentreController@index')->name('backend.centres.index');
    Route::get('backend/centres/create', 'CentreController@create')->name('backend.centres.create');
    Route::post('backend/centres', 'CentreController@store')->name('backend.centres.store');
    Route::get('backend/centres/{centre}/edit', 'CentreController@edit')->name('backend.centres.edit');
    Route::put('backend/centres/{centre}', 'CentreController@update')->name('backend.centres.update');
    Route::delete('backend/centres/{centre}', 'CentreController@destroy')->name('backend.centres.destroy');
    /* Certificacions */
    Route::get('backend/certificacions', 'CertificacioController@index')->name('backend.certificacions.index');
    Route::get('backend/certificacions/create', 'CertificacioController@create')->name('backend.certificacions.create');
    Route::post('backend/certificacions', 'CertificacioController@store')->name('backend.certificacions.store');
    Route::get('backend/certificacions/{certificacio}/edit', 'CertificacioController@edit')->name('backend.certificacions.edit');
    Route::put('backend/certificacions/{certificacio}', 'CertificacioController@update')->name('backend.certificacions.update');
    Route::delete('backend/certificacions/{certificacio}', 'CertificacioController@destroy')->name('backend.certificacions.destroy');
    /* Categories */
    Route::get('backend/categories', 'CategoriaProducteController@index')->name('backend.categories.index');
    Route::get('backend/categories/create', 'CategoriaProducteController@create')->name('backend.categories.create');
    Route::post('backend/categories', 'CategoriaProducteController@store')->name('backend.categories.store');
    Route::get('backend/categories/{categoria}/edit', 'CategoriaProducteController@edit')->name('backend.categories.edit');
    Route::put('backend/categories/{categoria}', 'CategoriaProducteController@update')->name('backend.categories.update');
    Route::delete('backend/categories/{categoria}', 'CategoriaProducteController@destroy')->name('backend.categories.destroy');
    /* Productes */
    Route::get('backend/productes', 'ProducteController@index')->name('backend.productes.index');
    Route::get('backend/productes/create', 'ProducteController@create')->name('backend.productes.create');
    Route::post('backend/productes', 'ProducteController@store')->name('backend.productes.store');
    Route::get('backend/productes/{producte}/edit', 'ProducteController@edit')->name('backend.productes.edit');
    Route::put('backend/productes/{producte}', 'ProducteController@update')->name('backend.productes.update');
    Route::delete('backend/productes/{producte}', 'ProducteController@destroy')->name('backend.productes.destroy');
    /* Taules */
    Route::get('backend/taules', 'TaulaController@index')->name('backend.taules.index');
    Route::get('backend/taules/create', 'TaulaController@create')->name('backend.taules.create');
    Route::post('backend/taules', 'TaulaController@store')->name('backend.taules.store');
    Route::get('backend/taules/{taula}/edit', 'TaulaController@edit')->name('backend.taules.edit');
    Route::put('backend/taules/{taula}', 'TaulaController@update')->name('backend.taules.update');
    Route::delete('backend/taules/{taula}', 'TaulaController@destroy')->name('backend.taules.destroy');
});