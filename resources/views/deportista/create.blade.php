@extends("views.Plantilla.plantillabase");

@section("contenido");
 h2>Crear nuevo Deportista </h2>

<form action="/deportistas" method="POST">
@csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellido</label>
        <input id="apellido" name="apellido" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Dirección </label>
        <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Temporadas </label>
        <input id="temporadas" name="temporadas " type="number" step="any" value="0.00" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Coste Licencia  </label>
        <input id="CosteLicencia" name="CosteLicencia" type="float" step="any" value="0.00" class="form-control" tabindex="3">
    </div>


    <a href="/deportistas" class="btn btn-secondary" tabindex="5">Cancelar Creación </a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar  Deportista </button>
</form>

@endsection
