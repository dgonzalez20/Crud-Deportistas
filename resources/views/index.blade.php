@extends ("Plantilla.plantillabase")

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
