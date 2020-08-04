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
        <h1 class="mt-2">Alterar Pergunta</h1>
        <form action="{{ route('perguntas.update', $pergunta->id) }}" method="post" class="mt-2">
            
            @method('PATCH')
            <div class="form-group">
                <label for="id">ID: <span class="text-danger">*</span></label>
                <input type="text" id="id" name="id" class="form-control" required readonly value="{{$pergunta->id}}">
            </div>
            <div class="form-group">
                <label for="pergunta">Pergunta: <span class="text-danger">*</span></label>
                <input type="text" id="pergunta" name="pergunta" class="form-control" required  value="{{$pergunta->pergunta}}">
            </div>

            <div>Os campos marcados com <span class="text-danger">*</span> não podem estar em branco.</div>
            <input type="submit" class="btn btn-success mt-2" value="Alterar">
            <div class="mt-2" style="text-align:left">
            
             </div>
        </form>
        <a href="/perguntas"><button class="btn btn-info">Voltar</button></a>
</body>

</html>
