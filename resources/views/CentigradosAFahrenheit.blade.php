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

<form method="post" action="/CentigradosAFahrenheit">
    @csrf
    <label> Ingrese los Centigrados</label>
    <input type="number" id="centrigrados" name="centigrados" placeholder="Grados centrigrados"></input>

    <button type="submit">Convertir</button>
</form>


@if(isset($f))
    <p> El resultado es {{ $f }} grados fahrenheit </p>
@endif

</body>
</html>
