
@include("views.Plantilla.plantillabase")

@section("contenido")
 h2>Crear nuevo Deportista </h2>

<form action="/deportistas" method="POST">
@csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input id="apellido" name="apellido" type="text" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="direccion" class="form-label">Dirección </label>
        <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="temporadas" class="form-label">Temporadas </label>
        <input id="temporadas" name="temporadas " type="number" step="any" value="0.00" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="CosteLicencia" class="form-label">Coste Licencia  </label>
        <input id="CosteLicencia" name="CosteLicencia" type="float" step="any" value="0.00" class="form-control" tabindex="3">
    </div>

<!--Enlace a deportistas, en boton que redirecciona a la lista de deportistas que ya estan creados -->
    <a href="/deportistas" class="btn btn-secondary" tabindex="5">Cancelar Creación </a>
    <!--Botón para guardar los registros que se creen en el  formulariophp-->
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar  Deportista </button>
</form>

@endsection
