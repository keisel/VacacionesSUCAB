<?php

namespace VacacionesSUCAB\Http\Controllers;

use Illuminate\Http\Request;

use VacacionesSUCAB\Http\Requests;
use VacacionesSUCAB\Http\Controllers\Controller;
use DB;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hoteles = DB::selectOne("select * from hotel");
        return "El nombre del hotel es: ".$hoteles->nombre." y de categoria: ".$hoteles->categoria;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // DB::insert("insert into hotel(nombre, categoria, descripcion, direccion, idHotelLugar) values (?, ?, ?, ?, ?)", ['Hotel de Prueba 2', '3', 'Este es otro hotel de prueba', 'Direccion de prueba 2', 3]);
        // echo "<hr/>Insertado en la base de datos un hotel<br/>";
        // $hoteles = DB::selectOne("select * from hotel");

        $hoteles = DB::selectOne("select * from hotel");
        return "El nombre del hotel es: ".$hoteles->nombre." y de categoria: ".$hoteles->categoria;
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
