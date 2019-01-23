<?php

/**
 * Esta clase se creo desde la linea de comandos cmd
 * La linea es la siguiente: "php artisan make:controller userscontroller --resource"
 * Lo que hace es crear un controlador con las funciones incluidas. Esto nos ahorra tiempo y trabajo
 * 
 * Para conectar a la base de datos mysql, vamos al archivo ".env" y modificamosn los valores de conexión
 * Es decir, el nombre de la base de datos, la raíz, el host, la contraseñas, etc.
 * 
 * Para hacer la migración, se agregan dos lineas de código al archivo "Providers/AppServiceProvider.php"
 * 
 * Para la migración, desde la consola usamos la siguiente linea:
 * "php artisan make:model User -m"
 * Esta linea nos permite crear un modelo. El -m nos crea el archivo de migración
 * Una vez  hecho esto podemos ver el archivo creado en la carpeta database/migrations
 * Luego de hacer esto, en el archivo que se crea en la carpeta Migrations, se realizan los cambios
 * que se deseen hacer.
 * 
 * Una vez hecho esto, se migra hacia la base3 de datops usando la siguiente linea de comando
 * "php artisan migrate"
 * 
 * 
 * 
 * Con tinker podemos insertar los datos en la base de datos desde consola.
 * Primero usamos la siguiente linea de comando: "php artisan tinker"
 * Luego creamos una instancia de la tabla a trabajar. Ejemplo:
 * $users2 = new App\users2();
 * Una vez se cree la instanci procedemos a insertar los valores necesarios.
 * ejmplo para 'nombre':   $users2->nombre = 'Guillermo Hernández';
 * Lo mismo para el resto de registro.
 * Para cuardar usamos la linea de comnado: "$users2->save();"
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users2;

class userscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = users2::all();

        return view('users.index')->with('users', $users);
        //creamos en la carpeta: resources/views, una carpeta que se llame users y dentro de ella
        //un archivo que se llame "index.blade.php". El .blade es para poder trabajar con boostrap.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
