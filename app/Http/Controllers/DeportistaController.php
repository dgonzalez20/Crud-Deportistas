<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deportista;

class DeportistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*Declaro variable deportistas= Deportistas:all obtngo datos del formulario
        En base a la vista index en la variable */
        $deportistas = Deportista::all();

        return view("deportista.index")->with("deportistas", $deportistas);

    }

    /**
     * Show the form for creating a new resource.
     *<td>{{articulo}} </td>
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*Pido la vista create para crear nuevos deportistas */
        return view("deportista.create"); //Viws.deportista.create.blade.php
    }

    /**
     * Store a newly created resource in storage.
     * Equivalente a historial de datos,
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * Método que registra todos los datos, generando nuevo objeto deportistas, en base al modelo
     * Request --> get--> id formularip
     *
     */
    public function store(Request $request)
     {
       Deportista::create($request->all());
       
    //     /*Objeto Deportista*/
    // $deportistas=new Deportista();
    // $deportistas->nombre=$request->get("nombre");
    // $deportistas->apellido=$request->get("apellido");
    // $deportistas->direccion=$request->get("direccion");
    // $deportistas->temporadas=$request->get("temporadas");
    // $deportistas->CosteLicencia=$request->get("CosteLicencia");

/*Guardamos los datos con el método save,una vez guardados  */
        // $deportistas->save();
        return redirect("deportistas");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     * Metodo para editar en este caso deportistas, filtramos por $id
     * Atributo del formulario
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Declaración de variable deportista que llama al modelo
        $deportista=Deportista::find($id);
        return view('deportista.edit')->with('deportista',$deportista);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * Metódo que actualiza registros estos van filtrados por id
     * Request, método Get metodo del formulario
     */
    public function update(Request $request, $id)

    {
        $deportista=Deportista::find($id);
        $deportista->nombre= $request->get("nombre");
        $deportista->apellido=$request->get("apellido");
        $deportista->direcccion=$request->get("direccion");
        $deportista->temporadas=$request->get("temporadas");
        $deportista->CoosteLicencia=$request->get("CosteLicencia");

        return redirect('/deportistas');
    }

    /**
     * Remove the specified resource from storage.

     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        return view("deportista.delete");
    }
}
