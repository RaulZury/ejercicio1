<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soy MySQL</title>
    <meta name="description" content="ejercicio en laravel">
    <meta name="author" content="Raul Zury :3">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <h1>Hola, soy Una prueba :3</h1>
    <form action="/user" method="post">
    @csrf
    <label for="name" class="col-sm-2 col-form-label">Ingresa un ID*</label>
    <input type="text" name="id" id="id" placeholder="ID">
    <button type="submit" id="save" class="btn btn-primary">Consulta Mysql</button>
    <!--<button type="button" id="none" class="btn btn-primary">Regresar</button>-->
    <input type ='button' class="btn btn-warning"  value = 'Regresar' 
        id="back" onclick="location.href = '/index'"/><br><br>
    <br>
    <br>
    @if(session('status'))
            {{ session('status') }}
    @endif
    </form>
    
</body>
</html>