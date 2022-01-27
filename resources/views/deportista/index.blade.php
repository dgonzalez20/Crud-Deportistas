
 @extends("views.Plantilla.plantillabase");

 @section("contenido");
<a href="deportistas/create" class="btn btn-primary">Crear Deportista </a>

 <table class="table table-dark table-striped mt-4 ">
     <thead>
     <tr>
         <th scope="col">ID </th>
         <th scope="col"> Nombre </th>
         <th scope="col">Apellido</th>
         <th scope="col">Dirección  </th>
         <th scope="col">Temporadas </th>
         <th scope="col">Coste licencia </th>
         <th scope="col">Acciones  </th>
     </tr>
     </thead>
     <tbody>
      @foreach ($deportistas as $deportista)
     <tr>
      <td>{{$deportista->ID }}</td>
      <td>{{$deportista->Nombre}}</td>
      <td>{{$deportista->Apellido }}</td>
      <td>{{$deportista->Dirección}} </td>
      <td>{{$deportista->Temporadas}} </td>
      <td>{{$deportista->Coste Licencia}}</td>
         <td>
             <a class=" btn btn-info">Editar Deportista </a>
             <button class="btn-btn-danger">Eliminar Deportista </button>
         </td>
     </tr>
     @endforeach
     </tbody>
 </table>
 @endsection
