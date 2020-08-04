<!DOCTYPE html>
<html lang="en">
{{$x  = 1}}
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('icon/busca.ico')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Ranking</title>
    
</head>

<body>
    <div class="container">
        <h1 class="mt-2">Pontuação</h1>
        
        <form action="/perguntas" class="form-inline mt-2">

            <table class="table mt-2 text-center">
                <tr>
                    <th>Posição</th>
                    <th class="text-left">Nome
                    <th>Acertos</th>
                   
                   
                </tr>
                @foreach ($usuario as $d)
                <tr>
                    <td>{{$x++}}</td>
                    <td class="text-left">
                        {{$d->nome}}</td>
                    <td>{{$d->pontuacao}}</td>

                </tr>
                @endforeach
            </table>
          
            <div style="text-align: left;">
            <button type="submit" class="btn btn-dark">Menu</button></a>

     </div>
    </div>
    </form>


</body>

</html>