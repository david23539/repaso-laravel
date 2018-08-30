<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola-mundo', function(){
    return view('holamundo');
});

/*Route::get('/contacto', function (){
    return view('contacto');
});*/

Route::post('/hola-mundo', function(){
    return 'hola mundo soy David Vizcaino';
});

/*Route::match(['get', 'post'],'/hola-mundo', function(){
    return 'hola mundo soy David Vizcaino';
});*/

/*Route::any('/hola-mundo', function(){
    return 'hola mundo soy David Vizcaino';
});*/

Route::get('/contacto/{nombre?}/{edad?}', function ($nombre = "David", $edad = null){
    /*return view('contacto', array(
        'nombre'=> $nombre,
        'edad' => $edad
    ));*/
    return view('contacto.contacto')->with('nombre', $nombre)
    -> with('edad', $edad)
    ->with('frutas',array('naranja','pera','sandia','melon','piña'));
})-> where([
    'nombre' => '[A-Za-z]+',
    'edad' => '[0-9]+'
]);



Route::group(['prefix'=>'fruteria'],function (){
    Route::get('/frutas', 'FrutasController@index');
    Route::get('/naranjas/{admin?}', [ 'middleware' => 'IsAdmin',
            'uses' => 'FrutasController@naranjas',
            'as'=>'naranjitas'
        ]
    );
    Route::get('/peras', 'FrutasController@peras');

});
Route::post('recibir', 'FrutasController@recibirFormulario');
