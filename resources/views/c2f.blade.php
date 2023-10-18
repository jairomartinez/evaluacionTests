@include('plantilla')
@section('titulo', 'Centigrados a Farenheit')
@section('contenido')
    <h1>Convertir grados Centígrados A Farenheit</h1>
    <form>
        <div class="mb-3">
            <label for="centigrados" class="form-label">Centigrados</label>
            <input type="number" class="form-control" id="centigrados" name="centigrados" placeholder="ingrese los grados centigrados">
            <input type="submit" value="Convertir">
        </div>
    </form>
@endsection
