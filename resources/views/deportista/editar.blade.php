@extends("views.Plantilla.plantillabase");
@section("contenido");
<form action="/deportistas/{{$deportista->id}}" method="POST">
    @csrf
    @method("PUT")

    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$deportista->nombre}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellido</label>
        <input id="apellido" name="apellido" type="text" class="form-control" value="{{$deportista->apellido}}>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Dirección </label>
        <input id="direccion" name="direccion" type="text" class="form-control" value="{{$deportista->descripcion}}>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Temporadas </label>
        <input id="temporadas" name="temporadas " type="number" step="any" value="0.00" class="form-control" value="{{$deportista->temporadas}}>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Coste Licencia  </label>
        <input id="CosteLicencia" name="CosteLicencia" type="float" step="any" value="0.00" class="form-control" value="{{$deportista->CosteLicencia}}>
    </div>

   <a href=/deportistas  class= btn-btn-secundary> Cancelar

    </form>
@endsection


