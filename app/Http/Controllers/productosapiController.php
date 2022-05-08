<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductosTienda;

class productosapiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos=ProductosTienda::all();
        return $productos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $productos=new ProductosTienda();
        $productos->nombre=$request->nombre;
        $productos->descripcion=$request->descripcion;
        $productos->categoria=$request->categoria;
        $productos->existencias=$request->existencias;
        $productos->save();
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
        $productos=ProductosTienda::find($id);
        return $productos;
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
        $productos=ProductosTienda::find($request->id);
        $productos->nombre=$request->nombre;
        $productos->descripcion=$request->descripcion;
        $productos->categoria=$request->categoria;
        $productos->existencias=$request->existencias;
        $productos->save();
        return $productos;
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
        ProductosTienda::destroy($id);
    }
}
