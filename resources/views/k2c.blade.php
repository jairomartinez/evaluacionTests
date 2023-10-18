@include('plantilla')
@section('titulo', 'Kelvin a Centigrados')
@section('contenido')
    <h1>Convertir grados Kelvin a centigrados</h1>
    <form>
        <div class="mb-3">
            <label for="kelvin" class="form-label">Centigrados</label>
            <input type="number" class="form-control" id="kelvin" name="kelvin" placeholder="ingrese los grados Kelvin">
            <input type="submit" value="Convertir">
        </div>
    </form>
@endsection
