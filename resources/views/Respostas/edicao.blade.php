<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('icon/busca.ico')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Edição Resposta</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-2">Menu de Respostas</h1>

        @if(!empty($mensagem))
        <div class="alert alert-danger mt-2">{{$mensagem}}</div>
        @endif
    
        
        <table class="table mt-2 text-center">
            <tr>
                <th>Id</th>
                <th>Codigo Pergunta</th>
                <th>Descricao</th>
                <th>Certo</th>
               
            </tr>
            @foreach ($resposta as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->cod_pergunta}}</td>
                <td class="text-left">
                    {{$d->descricao}}</td>
                <td>{{$d->flagCerto}}</td>
                
               

                <form action="{{ route('respostas.destroy',$d->id)}}" method="post">

                    @method('DELETE')
                    <td><button type="sumbit" class="btn btn-danger">Excluir</button></a></td>
                </form>
                <td><a href="{{ route('respostas.edit',$d->id)}}"><button class="btn btn-info">Alterar Resposta</button></a></td>
            </tr>
            @endforeach
        </table>
       
        
        <div style="text-align: center;"> 
            <a href="{{ route('respostas.show', $da)}}"><button class="btn btn-success">Inserir</button></a>
    </div>
    <a href="/perguntas"><button class="btn btn-dark">Menu</button></a>

    </div>
  
   
   
</body>

</html>
