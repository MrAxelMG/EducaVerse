<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function(){
    Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

    Route::get('materias', [App\Http\Controllers\MateriaController::class, 'index']);
    Route::get('materias/show', [App\Http\Controllers\MateriaController::class, 'show']);
    Route::post('materias/add', [App\Http\Controllers\MateriaController::class, 'add']);
    Route::post('materias/update', [App\Http\Controllers\MateriaController::class, 'update']);
    Route::post('materias/delete', [App\Http\Controllers\MateriaController::class, 'delete']);


    Route::get('escuelas', [App\Http\Controllers\EscuelaController::class, 'index']);
    Route::get('escuelas/show', [App\Http\Controllers\EscuelaController::class, 'show']);
    Route::post('escuelas/add', [App\Http\Controllers\EscuelaController::class, 'add']);
    Route::post('escuelas/update', [App\Http\Controllers\EscuelaController::class, 'update']);
    Route::post('escuelas/delete', [App\Http\Controllers\EscuelaController::class, 'delete']);

    Route::get('categorias', [App\Http\Controllers\CategoriaController::class, 'index']);
    Route::get('categorias/show', [App\Http\Controllers\CategoriaController::class, 'show']);
    Route::post('categorias/add', [App\Http\Controllers\CategoriaController::class, 'add']);
    Route::post('categorias/update', [App\Http\Controllers\CategoriaController::class, 'update']);
    Route::post('categorias/delete', [App\Http\Controllers\CategoriaController::class, 'delete']);

    Route::get('videojuegos', [App\Http\Controllers\VideojuegoController::class, 'index']);
    Route::get('videojuegos/show', [App\Http\Controllers\VideojuegoController::class, 'show']);
    Route::post('videojuegos/add', [App\Http\Controllers\VideojuegoController::class, 'add']);
    Route::post('videojuegos/update', [App\Http\Controllers\VideojuegoController::class, 'update']);
    Route::post('videojuegos/delete', [App\Http\Controllers\VideojuegoController::class, 'delete']);

    Route::get('perfil', [App\Http\Controllers\PerfilController::class, 'index']);
    Route::post('perfil/update', [App\Http\Controllers\PerfilController::class, 'update']);
    
    Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
});

Route::get('/', [App\Http\Controllers\WebsiteController::class, 'index'])->name('inicio');
Route::get('/videojuegos', [App\Http\Controllers\WebsiteController::class, 'videojuegos'])->name('videojuegos');
Route::get('/nosotros', [App\Http\Controllers\WebsiteController::class, 'nosotros'])->name('contacto');
Route::get('/contacto', [App\Http\Controllers\WebsiteController::class, 'contacto'])->name('nosotros');

Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'create'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'store']);

Route::get('registro', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('registro');
Route::post('registro', [App\Http\Controllers\Auth\RegisterController::class, 'store']);

Route::get('lock-screen', [App\Http\Controllers\LoginController::class, 'index']);

Route::group(['prefix' => 'basic-ui'], function(){
    Route::get('accordions', function () { return view('admin.basic-ui.accordions'); });
    Route::get('buttons', function () { return view('admin.basic-ui.buttons'); });
    Route::get('badges', function () { return view('admin.basic-ui.badges'); });
    Route::get('breadcrumbs', function () { return view('admin.basic-ui.breadcrumbs'); });
    Route::get('dropdowns', function () { return view('admin.basic-ui.dropdowns'); });
    Route::get('modals', function () { return view('admin.basic-ui.modals'); });
    Route::get('progress-bar', function () { return view('admin.basic-ui.progress-bar'); });
    Route::get('pagination', function () { return view('admin.basic-ui.pagination'); });
    Route::get('tabs', function () { return view('admin.basic-ui.tabs'); });
    Route::get('typography', function () { return view('admin.basic-ui.typography'); });
    Route::get('tooltips', function () { return view('admin.basic-ui.tooltips'); });
});

Route::group(['prefix' => 'advanced-ui'], function(){
    Route::get('dragula', function () { return view('admin.advanced-ui.dragula'); });
    Route::get('clipboard', function () { return view('admin.advanced-ui.clipboard'); });
    Route::get('context-menu', function () { return view('admin.advanced-ui.context-menu'); });
    Route::get('popups', function () { return view('admin.advanced-ui.popups'); });
    Route::get('sliders', function () { return view('admin.advanced-ui.sliders'); });
    Route::get('carousel', function () { return view('admin.advanced-ui.carousel'); });
    Route::get('loaders', function () { return view('admin.advanced-ui.loaders'); });
    Route::get('tree-view', function () { return view('admin.advanced-ui.tree-view'); });
});

Route::group(['prefix' => 'forms'], function(){
    Route::get('basic-elements', function () { return view('admin.forms.basic-elements'); });
    Route::get('advanced-elements', function () { return view('admin.forms.advanced-elements'); });
    Route::get('dropify', function () { return view('admin.forms.dropify'); });
    Route::get('form-validation', function () { return view('admin.forms.form-validation'); });
    Route::get('step-wizard', function () { return view('admin.forms.step-wizard'); });
    Route::get('wizard', function () { return view('admin.forms.wizard'); });
});

Route::group(['prefix' => 'editors'], function(){
    Route::get('text-editor', function () { return view('admin.editors.text-editor'); });
    Route::get('code-editor', function () { return view('admin.editors.code-editor'); });
});

Route::group(['prefix' => 'charts'], function(){
    Route::get('chartjs', function () { return view('admin.charts.chartjs'); });
    Route::get('morris', function () { return view('admin.charts.morris'); });
    Route::get('flot', function () { return view('admin.charts.flot'); });
    Route::get('google-charts', function () { return view('admin.charts.google-charts'); });
    Route::get('sparklinejs', function () { return view('admin.charts.sparklinejs'); });
    Route::get('c3-charts', function () { return view('admin.charts.c3-charts'); });
    Route::get('chartist', function () { return view('admin.charts.chartist'); });
    Route::get('justgage', function () { return view('admin.charts.justgage'); });
});

Route::group(['prefix' => 'tables'], function(){
    Route::get('basic-table', function () { return view('admin.tables.basic-table'); });
    Route::get('data-table', function () { return view('admin.tables.data-table'); });
    Route::get('js-grid', function () { return view('admin.tables.js-grid'); });
    Route::get('sortable-table', function () { return view('admin.tables.sortable-table'); });
});

Route::get('notifications', function () {
    return view('admin.notifications.index');
});

Route::group(['prefix' => 'icons'], function(){
    Route::get('material', function () { return view('admin.icons.material'); });
    Route::get('flag-icons', function () { return view('admin.icons.flag-icons'); });
    Route::get('font-awesome', function () { return view('admin.icons.font-awesome'); });
    Route::get('simple-line-icons', function () { return view('admin.icons.simple-line-icons'); });
    Route::get('themify', function () { return view('admin.icons.themify'); });
});

Route::group(['prefix' => 'maps'], function(){
    Route::get('vector-map', function () { return view('admin.maps.vector-map'); });
    Route::get('mapael', function () { return view('admin.maps.mapael'); });
    Route::get('google-maps', function () { return view('admin.maps.google-maps'); });
});

Route::group(['prefix' => 'auth'], function(){    
    Route::get('login-2', function () { return view('admin.auth.login-2'); });
    Route::get('multi-step-login', function () { return view('admin.auth.multi-step-login'); });
    Route::get('register-2', function () { return view('admin.auth.register-2'); });
});

Route::group(['prefix' => 'error-pages'], function(){
    Route::get('error-404', function () { return view('admin.error-pages.error-404'); });
    Route::get('error-500', function () { return view('admin.error-pages.error-500'); });
});

Route::group(['prefix' => 'general-pages'], function(){
    Route::get('blank-page', function () { return view('admin.general-pages.blank-page'); });
    Route::get('landing-page', function () { return view('admin.general-pages.landing-page'); });
    Route::get('profile', function () { return view('admin.general-pages.profile'); });
    Route::get('email-templates', function () { return view('admin.general-pages.email-templates'); });
    Route::get('faq', function () { return view('admin.general-pages.faq'); });
    Route::get('faq-2', function () { return view('admin.general-pages.faq-2'); });
    Route::get('news-grid', function () { return view('admin.general-pages.news-grid'); });
    Route::get('timeline', function () { return view('admin.general-pages.timeline'); });
    Route::get('search-results', function () { return view('admin.general-pages.search-results'); });
    Route::get('portfolio', function () { return view('admin.general-pages.portfolio'); });
    Route::get('user-listing', function () { return view('admin.general-pages.user-listing'); });
});

Route::group(['prefix' => 'ecommerce'], function(){
    Route::get('invoice', function () { return view('admin.ecommerce.invoice'); });
    Route::get('invoice-2', function () { return view('admin.ecommerce.invoice-2'); });
    Route::get('pricing', function () { return view('admin.ecommerce.pricing'); });
    Route::get('product-catalogue', function () { return view('admin.ecommerce.product-catalogue'); });
    Route::get('project-list', function () { return view('admin.ecommerce.project-list'); });
    Route::get('orders', function () { return view('admin.ecommerce.orders'); });
});

// For Clear cache
Route::get('/clear-cache', function() {
    // Artisan::call('cache:clear');
    return "Cache is cleared";
});

// 404 for undefined routes
// Route::any('/{page?}',function(){
//     return View::make('admin.error-pages.error-404');
// })->where('page','.*');