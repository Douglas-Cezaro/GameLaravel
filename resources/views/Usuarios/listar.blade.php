
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('icon/busca.ico')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Listar Usuarios</title>
</head>

<body>
    <div class="container">
        <h1 class="mt-2">Pesquisa de Usuarios</h1>

        @if(!empty($mensagem))
        <div class="alert alert-success mt-2">{{$mensagem}}</div>
        @endif
        <form action="/usuarios" class="form-inline mt-2">

            <div class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" id="nome" name="nome" class="form-control ml-2">
            </div>
            <input type="submit" class="btn btn-primary ml-2" value="Pesquisar">
        </form>
        @if(count($usuario) == 0)
        <div class="alert alert-danger mt-2">Nenhuma usuario encontrado com esse nome!</div>
        @else
        <table class="table mt-2 text-center">
            <tr>
                <th>Id</th>
                <th class="text-left">Nome
               
            </tr>
            @foreach ($usuario as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td class="text-left">
                    {{$d->nome}}</td>
               
                <form action="{{ route('usuarios.destroy',$d->id)}}" method="post">

                    @method('DELETE')
                    <td><button type="sumbit" class="btn btn-danger">Excluir</button></a></td>
                </form>

                <td><a href="{{ route('usuarios.edit',$d->id)}}"><button class="btn btn-warning">Alterar</button></a></td>
                
            </tr>
            @endforeach
        </table>
        @endif
       
        <div style="text-align: center;">
            <a href="{{ route('usuarios.create')}}"><button class="btn btn-info">Inserir</button></a>
        </div>
        <div style="text-align: left;">
            <a href="/perguntas"><button class="btn btn-dark">Menu</button></a>
    </div>
    </div>
    
</body>

</html>
