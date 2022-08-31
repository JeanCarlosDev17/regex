<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regex</title>
</head>
<body>
    <h1>Hola mundo</h1>




    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('regex.store')}}" method="post">
        @csrf
        <label for="nombre">Nombres</label>
        <input id="nombre" type="text" name="nombre">
        <label for="apellido">Apellidos</label>
        <input id="apellido" type="text" name="apellido">
        <label for="tipo">Tipo ID</label>
        <select id="tipo" name="tipo">
            <option value="" selected>seleccione</option>
            <option value="cc">Cedula</option>
            <option value="ti" >Tarjeta de identidad</option>
            <option value="ps">Pasaporte</option>
        </select>
        <label for="id">Número ID</label>
        <input id="id" type="text" name="id">
        <label for="correo">Correo electronico</label>
        <input id="correo" type="email" name="correo">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
