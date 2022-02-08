@extends("Plantilla.plantillabase")

 @section("contenido");
<a href="deportistas/create" class="btn btn-primary">Crear Deportista </a>

 <table class="table table-dark table-striped mt-4 ">
     <thead>
     <tr>
         <!--Elementos de la tabla principal -->
         <th scope="col">ID</th>
         <th scope="col"> Nombre </th>
         <th scope="col">Apellido</th>
         <th scope="col">Dirección  </th>
         <th sciope="col">Temporadas </th>
         <th scope="col">Coste licencia </th>
         <th scope="col">Acciones  </th>
     </tr>
     </thead>
     <tbody>
     <!--For que accede a todos los atributos del formulario Create.bade.php
     -->
      @foreach ($deportistas as $deportista)
     <tr>
      <td>{{$deportista->id }}</td>
      <td>{{$deportista->nombre}}</td>
      <td>{{$deportista->apellido }}</td>
      <td>{{$deportista->direccion}} </td>
      <td>{{$deportista->temporadas_value}} </td>
      <td>{{$deportista->coste_licencia}}</td>
         <td>
             <a href="{{  url("deportistas/".$deportista->id."/edit")}}"  class=" btn btn-info">Editar Deportista </a>
          {{-- "deportistas/$deportista->id/edit" --}}
          
         </td>
         <td>
            <form action="{{  url("deportistas/".$deportista->id)}}" method="POST">
                @csrf
                @method("DELETE")
            <button type="submit" class="btn-btn-danger">Eliminar Deportista </button>
            </form>
        </td>
     </tr>
     @endforeach
     </tbody>
 </table>
 @endsection
