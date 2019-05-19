<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Session;
use Redirect;


class UsuarioController extends Controller
{

    public function index()
    {

        $usuario = new Usuario();
        $usuarios = Usuario::all();
        return view('usuario.index', compact('usuario', 'usuarios'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
       
        $usuario = new Usuario();
        $usuario->fill($request->all());
        $usuario->save();

        Session::flash('message', 'Cadstrado com sucesso');
        return Redirect::to('usuario');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $usuario = Usuario::find($id);
        $usuarios = Usuario::all();

        return view('usuario.index', compact('usuario', 'usuarios'));
    }


    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);

        $usuario->fill($request->all());
        $usuario->save();

        Session::flash('message', 'Atualizado com sucesso');
        return Redirect::to('usuario');
    }



    public function destroy($id)
    {

        $usuario = Usuario::find($id)->delete();


        Session::flash('message', 'Exlcuído com sucesso!');
        return Redirect::to('usuario');
    }
}
