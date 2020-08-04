<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Usuario</title>
</head>

<body>
    <div class="container">
         @if(!empty($mensagem))
        <div class="alert alert-danger mt-2">{{$mensagem}}</div>
        @endif

        <h1 class="mt-2">Criar Usuario</h1>
        
        <form action="{{ route('usuarios.store') }}" method="post" class="mt-2">
            
            <div class="form-group">
                <label for="nome">Nome: <span class="text-danger">*</span></label>
                <input type="text" id="nome" name="nome" class="form-control" autofocus required>
            </div>
            
            <input type="submit" class="btn btn-success mt-2" value="Responder">
        </form>
        <div class="mt-2" style="text-align:left">
            <a href="/perguntas"><button class="btn btn-info">Voltar</button></a>
        </div>
    </div>
</body>

</html>
