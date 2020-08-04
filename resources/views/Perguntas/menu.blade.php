<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('icon/busca.ico')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Menu Questões</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-2">Menu de Perguntas</h1>
        <div style="text-align: right;">
            <a href="{{ route('usuarios.create')}}"><button class="btn btn-secondary">Criar Usuario</button></a>
        </div>
        <table class="table mt-2 text-center">
            <tr>
                <th>Id</th>
                <th class="text-left">Pergunta
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($pergunta as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td class="text-left">
                    {{$d->pergunta}}</td>
                
               

                <form action="{{ route('perguntas.destroy',$d->id)}}" method="post">

                    @method('DELETE')
                    <td><button type="sumbit" class="btn btn-danger">Excluir</button></a></td>
                </form>

                <td><a href="{{ route('perguntas.edit',$d->id)}}"><button class="btn btn-warning">Alterar</button></a></td>
                <td><a href="/edicao/{{$d->id}}"><button class="btn btn-info">Alterar Respostas</button></a></td>
            </tr>
            @endforeach
        </table>
        
        <div style="text-align: center;">
            <a href="{{ route('perguntas.create')}}"><button class="btn btn-success">Inserir</button></a>
        </div>

       <br>
        <div style="text-align: center;">
            <a href="/logar"><button class="btn btn-dark">Responder</button></a>
        </div>
        <div style="text-align: left;">
            <a href="/usuarios"><button class="btn btn-info">Listar Usuarios</button></a>
        </div>
     <div style="text-align: right;">
            <a href="/Ranking"><button class="btn btn-primary">Ranking</button></a>
     </div>

     {{$pergunta->links()}}
    </div>
  
   
   
</body>

</html>
