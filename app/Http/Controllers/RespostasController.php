<?php

namespace App\Http\Controllers;

use App\Respostas;
use Illuminate\Http\Request;
use DB;
use RespostaSeeder;

class RespostasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('respostas.inserir');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flag = $request->input('flagCerto');
        $codpergunta = $request->input('cod_pergunta');
        
        $validarCerta = DB::select("select * from respostas where cod_pergunta = $codpergunta and flagCerto = 'T'");

        if (count($validarCerta) == 1) {
            if ($flag == 'T') {
                $mensagem = "Só pode houver uma resposta certa !!!";
                return view('respostas.inserir')->with('cod_pergunta', $codpergunta)->with('mensagem', $mensagem);
            }
        }
        $resposta = new Respostas();
        if (empty($request->input('flagCerto'))) {

            $resposta->flagCerto = 'F';
        }
        $resposta->fill($request->all());

        $codpergunta = $resposta->cod_pergunta;
        $resposta->save();
        $validar = Respostas::where('cod_pergunta', '=', $codpergunta)->get();
        $validar2 = Respostas::where('cod_pergunta', '=', $codpergunta, 'and', 'flagCerto', 'is', null)->get();

        if (count($validar) == 4) {

            if (count($validar2) == 4) {

                $mensagem = "Precisa que uma resposta seja a correta!!!";
                $resposta = DB::select("select * from respostas where cod_pergunta = $codpergunta");
                return view('respostas.edicao')->with('resposta', $resposta)->with('mensagem', $mensagem)->with('da', $codpergunta);
            }

            $mensagem = "Pergunta Cadastrada com sucesso!!!";
            return view('perguntas.inserir')->with('mensagem', $mensagem);
        }


        return view('respostas.inserir')->with('cod_pergunta', $codpergunta);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $codpergunta = $id;
        $validar = Respostas::where('cod_pergunta', '=', $codpergunta)->get();


        if (count($validar) == 4) {

            $mensagem = "Número máximo de respostas!!!";
            $resposta = DB::select("select * from respostas where cod_pergunta = $codpergunta");
            return view('respostas.edicao')->with('mensagem', $mensagem)->with('resposta', $resposta)->with('da', $codpergunta);
        }


        return view('respostas.inserir')->with('cod_pergunta', $codpergunta);
    }

    /**
     * Show the form for editing the spec ified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resposta = Respostas::find($id);
        return view('respostas.alterar')->with('resposta', $resposta);
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
        $flag = $request->input('flagCerto');
        $codpergunta = $request->input('cod_pergunta');
        $resposta = Respostas::find($id);
        if (empty($request->input('flagCerto'))) {

            $resposta->flagCerto = 'F';
        }
        $validarCerta = DB::select("select * from respostas where cod_pergunta = $codpergunta and flagCerto = 'T'");

        $codpergunta = $resposta->cod_pergunta;
        if (count($validarCerta) == 1) {
            if ($flag == 'T') {
                $mensagem = "Só pode houver uma resposta certa !!!";
                $resposta = DB::select("select * from respostas where cod_pergunta = $codpergunta");
                return view('respostas.edicao')->with('resposta', $resposta)->with('mensagem', $mensagem)->with('da', $codpergunta);
            }
        }

        $resposta->fill($request->all());
        $resposta->save();
        $validar = Respostas::where('cod_pergunta', '=', $codpergunta)->get();
        $validar2 = DB::select("select * from respostas where cod_pergunta = $codpergunta and flagCerto = 'F'");

        if (count($validar) == 4) {

            if (count($validar2) == 4) {

                $mensagem = "Precisa que uma resposta seja a correta!!!";
                $resposta = DB::select("select * from respostas where cod_pergunta = $codpergunta");
                return view('respostas.edicao')->with('resposta', $resposta)->with('mensagem', $mensagem)->with('da', $codpergunta);
            }
            $mensagem = "Resposta alterada com sucesso!!!";
            $resposta = DB::select("select * from respostas where cod_pergunta = $codpergunta");
            return view('respostas.edicao')->with('resposta', $resposta)->with('mensagem', $mensagem)->with('da', $codpergunta);
        }

        $mensagem = "Favor Insira mais uma resposta!!!";
        $resposta = DB::select("select * from respostas where cod_pergunta = $codpergunta");
        return view('respostas.edicao')->with('resposta', $resposta)->with('mensagem', $mensagem)->with('da', $codpergunta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resposta = Respostas::find($id);
        $codpergunta = $resposta->cod_pergunta;
        $resposta->delete();

        $mensagem = 'Insira mais uma questão!!!';
        $resposta = DB::select("select * from respostas where cod_pergunta = $codpergunta");

        return view('respostas.edicao')->with('resposta', $resposta)->with('mensagem', $mensagem)->with('da', $codpergunta);
    }

    public function edicaoRespostas($id)
    {

        $resposta = DB::select("select * from respostas where cod_pergunta = $id");

        return view('respostas.edicao')->with('resposta', $resposta)->with('da', $id);
    }
}
