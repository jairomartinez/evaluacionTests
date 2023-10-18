@include('plantilla')
@section('titulo', 'Centigrados a Kelvin')
@section('contenido')
    <h1>Convertir grados Centigrados a Kelvin</h1>
    <form>
        <div class="mb-3">
            <label for="centigrados" class="form-label">Centigrados</label>
            <input type="number" class="form-control" id="centigrados" name="centigrados" placeholder="ingrese los grados centigrados">
            <input type="submit" value="Convertir">
        </div>
    </form>
@endsection
