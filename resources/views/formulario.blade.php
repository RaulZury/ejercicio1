<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 1</title>
        <meta name="description" content="ejercicio en laravel">
        <meta name="author" content="Raul Zury :3">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </head>
<body>
<div class="container">
<div class="col-sm-8">
<h1>Hola, soy una prueba :3</h1>

<form action="/guardar", method="post">
  @csrf
  <div class="row">
    <div class="form-group">
      <label for="name" class="col-sm-2 col-form-label">Ingresa un Nombre</label>
      <div class="col-sm-10">
        <input type="text" name="user_name" id="name" placeholder="Nombre">
    </div>
    <br>
    <div class="form-group">
      <label for="lastname" class="col-sm-2 col-form-label">Ingresa un Apellido</label>
      <div class="col-sm-10">
        <input type="text" name="user_lastname" id="lastname" placeholder="Apellido">
    </div>
    <br>
    <div class="form-group row">
    <div class="col-6">
      <button type="submit" id="save" class="btn btn-primary">guardar</button>
      <button type="reset" id= "reset" class="btn btn-primary">Limpiar</button>
      <script>
        $(function(){
        $('#save').click(function(){
          $('#button').show();
        });
        $('#reset').click(function(){
          $('#button').hide();
        });
      })
    </script>
      <input type ='button' class="btn btn-warning"  value = 'Continuar' 
        id="back" onclick="location.href = '/info'"/><br><br>
    </div>
    <br>
    <br>
    @if (session('status'))
      {{session('status')}}
    @endif
  </div>
  </div>
</form>

</div>
</div>
<script src="/js/app.js"></script>
</body>
</html>