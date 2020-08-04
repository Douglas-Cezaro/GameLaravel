<?php

namespace App\Http\Controllers;

use App\Perguntas;
use App\Respostas;
use App\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

class PerguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $pergunta = Perguntas::paginate(4);
        $perguntaP = Perguntas::all();
        return view('perguntas.menu', ['pergunta' => $pergunta]);
    }

    public function validar($id, $qtd, $page, $user)
    {

        $pergunta = Respostas::find($id);
        $flag = $pergunta->flagCerto;

        $total = $qtd;
        $pagina = $page + 1;
        $usuario = $user;


        if ($flag == 'T') {

            $total++;
            $pergunta = Respostas::paginate(4);

            return redirect('listar/' . $usuario . '?page=' . $pagina . '&qtd=' . $total. '&per');
        } else {

            $pergunta = Respostas::paginate(4);
            return redirect('listar/' . $usuario . '?page=' . $pagina . '&qtd=' . $total);
        }
    }

    public function pontuacao($qtd, $user)
    {

        $total = $qtd;
        
        $atualizar = DB::update("update usuarios set pontuacao = $total where nome = '$user'");
        
        if($total > 1){ 
            echo  "<script>alert('Você Acertou $total questões !!');</script>";
            echo  "<script>window.location.href = '/Ranking';</script>";
        }
        if($total == 0 ){

            echo  "<script>alert('Você Errou todas as questões !!');</script>";
            echo  "<script>window.location.href = '/Ranking';</script>";
        }if($total == 1){  
            echo  "<script>alert('Você acertou $total questão !!');</script>";  
            echo  "<script>window.location.href = '/Ranking';</script>";
        }

       
       
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perguntas.inserir');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pergunta = new Perguntas();

        $pergunta->fill($request->all());

        $pergunta->save();

        $codpergunta = $pergunta->id;

        return view('respostas.inserir')->with('cod_pergunta', $codpergunta);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function responder(Request $request, $user)
    {

        $perguntas = Perguntas::paginate(1);
        $perguntaAtual = $perguntas->currentPage();
        $ultimaPergunta = $perguntas->lastPage();
      
        $usuario = $user;
        
      

        if ($perguntaAtual > $ultimaPergunta) {
            $qtd = $request->input('qtd');
            return redirect('/perguntas/pontuacao/' . $qtd . '/' . $usuario);
        }

        if ($perguntaAtual == 1) {
            $qtd = 0;
            $pergunta = Perguntas::with('respostas')->where('id', $perguntaAtual)->first();
        } else {
            $qtd = $request->input('qtd');
            $pergunta = Perguntas::with('respostas')->where('id', $perguntaAtual)->first();
        }


        return view('perguntas.listar', [
            'perguntas' => $perguntas,
            'pergunta' => $pergunta,
            'page' => $perguntaAtual,
            'qtd' => $qtd,
            'usuario' => $usuario

        ]);
    }
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
        $pergunta = Perguntas::find($id);
        return view('perguntas.alterar')->with('pergunta', $pergunta);
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
        $pergunta = Perguntas::find($id);
        $pergunta->fill($request->all());
        $pergunta->save();
        $mensagem = 'Pergunta alterada com sucesso';
        $pergunta = Perguntas::paginate(4);
        return view('perguntas.menu')->with('mensagem', $mensagem)->with('pergunta', $pergunta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pergunta = Perguntas::find($id);
        $pergunta->delete();

        $alterar2 = DB::statement("ALTER TABLE perguntas AUTO_INCREMENT = 1 ");
       
        $mensagem = 'Pergunta deletada com sucesso!!!';
        $pergunta = Perguntas::paginate(4);
        return view('perguntas.menu')->with('mensagem', $mensagem)->with('pergunta', $pergunta);
    }

   
}
