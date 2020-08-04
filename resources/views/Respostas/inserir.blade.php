
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Inserir</title>
 
</head>

<body>
    <div class="container">

        <h1 class="mt-2">Cadastro de Respostas</h1>
        @if(!empty($mensagem))
        <div class="alert alert-danger mt-2">{{$mensagem}}</div>
        @endif

        <form action="{{ route('respostas.store') }}" method="post" class="mt-2">
        

        <label for="cod_pergunta">Cod Pergunta: <span class="text-danger">*</span></label>
                <input type="text" id="cod_pergunta" name="cod_pergunta" class="form-control" required readonly value="{{$cod_pergunta}}">
            <div class="form-group">
                <label for="descricao">Descricao: <span class="text-danger">*</span></label>
                <input type="text" id="descricao" name="descricao" class="form-control" autofocus required>
                <label for="flagCerto">Resposta Certa: <span class="text-danger"></span></label>
                <input type="checkbox" id="flagCerto" name="flagCerto" value="T" class="form-control">
            </div>
           
            
        
            <div>Os campos marcados com <span class="text-danger">*</span> não podem estar em branco.</div>
            <input type="submit" class="btn btn-success mt-2" value="Inserir">
        </form>
        <div class="mt-2">
        </div>
    </div>
</body>

</html>
