<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post" action="/CentigradosAKelvin">
    @csrf
    <label> Ingrese el Grado Centigrado</label>
    <input type="number" id="centigrado" name="centigrados" placeholder="Grado centigrados"></input>

    <button type="submit">Convertir</button>
</form>


@if(isset($k))
    <p> El resultado es {{ $k }} grados kelvin </p>
@endif

</body>
</html>
