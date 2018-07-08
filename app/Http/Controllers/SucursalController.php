<?php

namespace Restaurant\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Restaurant\Sucursal;


class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sucursals= Sucursal::all();
       return view('sucursals.index', compact('sucursals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('sucursals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sucursal::create($request->all() );
        Session::flash('mensaje', 'Sucursal agregada!');
        return redirect('/sucursal');
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
       $sucursal= Sucursal::find( $id );
       return view('sucursals.edit', compact('sucursal'));
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
    $sucur=Sucursal::find( $id);
    $sucur->fill( $request->all() );
    $sucur->save();
     Session::flash('mensaje', 'Sucursal actualizada!');
        return redirect('/sucursal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Sucursal::destroy($id);
          Session::flash('mensaje', 'Sucursal eliminada!');
        return redirect('/sucursal');
    }
}
