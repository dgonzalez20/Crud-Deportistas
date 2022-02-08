@extends("Plantilla.plantillabase")
@section("contenido")
<form action="{{ url("deportistas/".$deportista->id)}}" method="POST">
    @csrf
    @method("PUT")

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{ old('nombre'),$deportista->nombre }}">
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input id="apellido" name="apellido" type="text" class="form-control" value="{{ old('apellido'), $deportista->apellido }}">
    </div>
    <div class="mb-3">
        <label for="direccion" class="form-label">Dirección </label>
        <input id="direccion" name="direccion" type="text" class="form-control" value="{{ old('direccion') }}">
    </div>
    <div class="mb-3">
        <label for="temporadas_value" class="form-label">Temporadas </label>
        <input id="temporadas_value" name="temporadas_value " type="number" step="any" value="0.00" class="form-control" value="{{ old('temporradas') }}"}>
    </div>
    <div class="mb-3">
        <label for="coste_licencia" class="form-label">Coste Licencia  </label>
        <input id="coste_licencia" name="coste_licencia" type="float" step="any"  class="form-control" value="{{ old('apellido') }}">
    </div>

   <a href="{{ url("deportistas") }}"  class= btn-btn-danger> Cancelar</a>

   <button type="submit" class="btn-btn-danger">Editar Deportista </button>
</form>
@endsection


