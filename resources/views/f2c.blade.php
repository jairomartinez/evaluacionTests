@include('plantilla')
@section('titulo', 'Farenheit a Centigrados')
@section('contenido')
    <h1>Convertir grados Farenheit a Centigrados</h1>
    <form>
        <div class="mb-3">
            <label for="farenheit" class="form-label">Farenheit</label>
            <input type="number" class="form-control" id="farenheit" name="farenheit" placeholder="ingrese los grados farenheit">
            <input type="submit" value="Convertir">
        </div>
    </form>
@endsection
