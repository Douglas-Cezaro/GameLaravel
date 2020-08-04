<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Perguntas</title>
</head>

<body>


    <div class="container">

        <table class="table mt-2 text-center">

            <tr>
                <td colspan="2">Nome do usuario: {{$usuario}}</td>
            </tr>
            <tr>
                
                <td colspan="2" Style="text-align: center;  font-weight: 640;  font-size: 40px">Pergunta: {{ $pergunta->pergunta}}</td>
            </tr>
            <tr>

                
                <th  style="text-align: center; font-style: italic; font-weight: 640;  font-size: 40px">Respostas

            </tr>

            @foreach ($pergunta['respostas'] as $p)
            <tr>
                <td>{{ $p->descricao }}</td>
                <td> <a href="/perguntas/validar/{{$p->id}}/{{$qtd}}/{{$page}}/{{$usuario}}"><button class="btn btn-success">Certa</button></a></td>

            </tr>

            @endforeach
        </table>
<!-- 
        {{ $perguntas->links() }} -->
        <div style="text-align:right">

            
            <a href="/perguntas"><button class="btn btn-danger">Menu</button></a>


        </div>
    </div>

</body>

</html>