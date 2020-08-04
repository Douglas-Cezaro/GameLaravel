<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Alterar</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{asset('icon/editar.ico')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="container">
        <h1 class="mt-2">Alterar Usuario</h1>
        <form action="{{ route('usuarios.update', $usuario->id) }}" method="post" class="mt-2">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="id">ID: <span class="text-danger">*</span></label>
                <input type="text" id="id" name="id" class="form-control" required readonly value="{{$usuario->id}}">
            </div>
            <div class="form-group">
                <label for="nome">Nome: <span class="text-danger">*</span></label>
                <input type="text" id="nome" name="nome" class="form-control" autofocus required value="{{$usuario->nome}}">
            </div>
            <div>Os campos marcados com <span class="text-danger">*</span> não podem estar em branco.</div>
            <input type="submit" class="btn btn-success mt-2" value="Alterar">
        </form>
    </div>
</body>

</html>