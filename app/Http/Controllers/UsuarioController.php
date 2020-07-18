<?php

namespace App\Http\Controllers;

use App\models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all the nerds
        $usuarios = Usuario::all();

        // load the view and pass the nerds
        return view('usuarios.index', compact('usuarios', $usuarios));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        /*$rules = array(
            'nombres'         => 'required',
            'correo'          => 'required|email|unique:users',
            'contrasena'      => 'required|min:8',
            'passchecker'     => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('signup/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {*/

            $Usuario = new Usuario();
            $Usuario->Nombres = $request->input("nombre");
            $Usuario->ApellidoPaterno = $request->input("apaterno");
            $Usuario->ApellidoMaterno = $request->input("amaterno");
            $Usuario->Correo = $request->input("correo");
            $Usuario->password = $request->input("passchecker");
            $Usuario->IDRol = $request->input("rol");
            $Usuario->save();
            
            //Session::flash('message', 'Asociado creado!');
            return redirect()->route('display_landingpage');
        //}
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $id)
    {
        $usuario = Usuario::find($id);

        return view::make('usuarios.show')
            ->with('usuario', $usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);

        // show the edit form and pass the nerd
        return view::make('usuarios.edit')
            ->with('usuario', $usuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        /*$rules = array(
            'nombres'         => 'required',
            'correo'          => 'required|email',
            'contrasena'      => 'required',
            'passchecker'     => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('nerds/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {*/
            // store
            $Usuario = Usuario::find($IDUsuario);
            $Usuario->Nombres = Input::get('nombre');
            $Usuario->ApellidoPaterno = Input::get('apaterno');
            $Usuario->ApellidoMaterno = Input::get('amaterno');
            $Usuario->Correo = Input::get('correo');
            $Usuario->password = Input::get('passchecker');
            $Usuario->Rol = Input::get('rol');
            $Usuario->save();

            // redirect
            Session::flash('message', 'Asociado creado!');
            return Redirect::route('display_landingpage');
        //}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($IDUsuario)
    {
        //// delete
        $usuario = Usuario::find($IDUsuario);
        $usuario->delete();

        // redirect
        Session::flash('message', 'Eliminado exitosamente');
        return Redirect::to('usuarios');
    }
}
