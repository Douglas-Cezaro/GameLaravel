<?php

namespace App\Http\Controllers;

use App\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $usuario = usuario::all();

        $nome = Input::get('nome');
        $usuario = usuario::where('nome', 'like', '%' . $nome . '%')->get();
        return view('usuarios.listar', ['usuario' => $usuario]);
    }

    public function ranking()
    {

        $usuario = DB::select('select * from usuarios order by pontuacao desc');
        return view('usuarios.pontuacao', ['usuario' => $usuario]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.inserirUsuario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nome = $request->input('nome');
        $validar = usuario::where('nome', '=', $nome)->get();

        if (count($validar) > 0) {
            $mensagem = 'Usuário já cadastrado!!!';
            return view('usuarios.inserirUsuario')->with('mensagem', $mensagem);
        }
        $usuario = new usuario();
        $usuario->fill($request->all());
        $usuario->save();
        return redirect('/listar/' . $usuario->nome);
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
    public function viewLogar()
    {

        return view('usuarios.login');
    }

    public function logar(Request $request)
    {

        $nome = $request->input('nome');

        $validar = usuario::where('nome', '=', $nome)->get();

        if (count($validar) == 0) {

            echo  "<script>alert('Usuario não cadastrado!!');</script>";
            echo  "<script>window.location.href = '/usuarios/create';</script>";
        } else {
            return redirect('/listar/' . $nome);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = usuario::find($id);
        return view('usuarios.alterar')->with('usuario', $usuario);
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
        $usuario = usuario::find($id);
        $nome = $request->input('nome');
        $validar = DB::select("select * from usuarios where nome = '$nome'");
      

        if (count($validar) > 0) {

            echo  "<script>alert('O nome $nome já foi utilizado!!');</script>";
            echo  "<script>window.location.href = '/usuarios';</script>";
         }else{
         $usuario->fill($request->all());
         $usuario->save();
         $mensagem = 'Usuario alterado com sucesso';
         $usuario = usuario::all();
         return view('usuarios.listar')->with('mensagem', $mensagem)->with('usuario', $usuario);
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = usuario::find($id);
        $usuario->delete();
        $mensagem = 'Usuario deletado com sucesso!!!';
        $usuario = usuario::all();

        return view('usuarios.listar')->with('usuario', $usuario)->with('mensagem', $mensagem);
    }
}
