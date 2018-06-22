<?php

namespace Restaurant\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Session;
use Restaurant\State;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $states=  \Restaurant\State::all();
        return view('states.index',   compact("states") );
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('states.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       State::create( $request->all() );
       Session::flash('mensaje','Departamento guardado');
       return redirect('/state/create');
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
        $state= State::find( $id ) ;
        return view('states.edit',  ['state'=> $state] );
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
        $state=  State::find(  $id);
        $state->fill(  $request->all() );
        $state->save();
        Session::flash('mensaje', 'Descripcion cambiada');
        return redirect('/states');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        State::destroy( $id );
        Session::flash('mensaje', 'Descripcion eliminada');
        return redirect('/states');
    }
    
    
    public function verses( Request $req ){
        
        $req->session()->push( 'series', 'sakamoto');
        
        return $req->session()->all() ;
    }
}
