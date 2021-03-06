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

Route::get("/buscador", "PeliculasController@buscar");

Route::get("/agregarPelicula", "PeliculasController@agregar");
Route::post("/agregarPelicula", "PeliculasController@almacenar");

Route::get('/', function () {
    return view('welcome');
});

Route::get("/bienvenidos", function() {
  return "Bienvenidos a todos";
});

Route::get("/peliculas", "PeliculasController@listado");

Route::get("/peliculas/{id}", function($id) {
  $vac = compact("id");
  return view("detallePelicula", $vac);
  /* return view("detallePelicula", [
      "id" => $id,
      "titulo" => 57
    ]);
  */
});

Route::get("generos", "GenerosController@listado");
Route::get("generos/{id}", "GenerosController@detalle");
