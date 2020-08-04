<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Respostas</title>
</head>

<body>

<div class="container">
        <h1 class="mt-2">Alterar Respostas</h1>
        <form action="{{ route('respostas.update', $resposta->id) }}" method="post" class="mt-2">
            
            @method('PATCH')
            <div class="form-group">
                <label for="id">ID: <span class="text-danger">*</span></label>
                <input type="text" id="id" name="id" class="form-control" required readonly value="{{$resposta->id}}">
            </div>
            <div class="form-group">
                <label for="cod_pergunta">Cod Pergunta: <span class="text-danger">*</span></label>
                <input type="text" id="cod_pergunta" name="cod_pergunta" class="form-control" required readonly value="{{$resposta->cod_pergunta}}">
            </div>
            <div class="form-group">
                <label for="descricao">Descricao: <span class="text-danger">*</span></label>
                <input type="text" id="descricao" name="descricao" class="form-control" required  value="{{$resposta->descricao}}">
            </div>
            @if($resposta->flagCerto == 'T')
                <div class="form-group">
                <label for="flagCerto">Resposta Certa: <span class="text-danger">*</span></label>
                <input type="checkbox" id="flagCerto" name="flagCerto" class="form-control" value="T" checked>
                </div>
            
            @endif
            @if($resposta->flagCerto != 'T')
            <div class="form-group">
                <label for="flagCerto">Resposta Certa: <span class="text-danger">*</span></label>
                <input type="checkbox" id="flagCerto" name="flagCerto" class="form-control" value="T">
            </div>
            @endif

            <div>Os campos marcados com <span class="text-danger">*</span> não podem estar em branco.</div>
            <input type="submit" class="btn btn-success mt-2" value="Alterar">
            <div class="mt-2" style="text-align:left">
            <a href="/perguntas"><button class="btn btn-info">Voltar</button></a>
             </div>
        </form>

</body>

</html>
