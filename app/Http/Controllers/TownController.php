<?php

namespace Restaurant\Http\Controllers;

use Restaurant\Town;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class TownController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $states= \Restaurant\State::pluck( 'name', 'id');
          
       
       if( $states ){ 
         $towns= Town::where('state_id', "1" )->get();  
       }
     
       return view('towns.index', [ 'states'=> $states, 'towns'=>  $towns ]  ); 
       
    }

    
    public function cities( $id ){
        $towns= Town::where('state_id', $id )->get(); 
        return response()->json( $towns);
//        link_to_route('town.edit',
//                '',
//                [  $ite->id ] , 
//                ['class'=>'btn btn-primary fas fa-edit'] 
    }
    
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $states= \Restaurant\State::pluck('name', 'id');
       return view('towns.create',  compact("states"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if( $request['name'] ){
            $names=  $request['name'];
            
            foreach($names as $it){
                Town::create(  ['name'=> $it, 'state_id'=>$request->state_id]  );
            }
        Session::flash('mensaje', sizeof($request['name']) > 1 ? 'Ciudades registradas! ': 'Ciudad registrada!');
        return redirect("/town/create"); 
        }
        
       
        return redirect("/town/create");  
    }

    /**
     * Display the specified resource.
     *
     * @param  \Restaurant\Town  $town
     * @return \Illuminate\Http\Response
     */
    public function show(Town $town)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Restaurant\Town  $town
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $states= \Restaurant\State::pluck('name', 'id');
               
       $town=  Town::find( $id );
       if( $town){
           return view('towns.edit',  ['town'=> $town,  'states'=> $states]   );
       }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Restaurant\Town  $town
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $town= Town::find( $id);
        $town->fill(  $request->all() );
        $town->save();
        
        Session::flash('mensaje', 'Descripcion cambiada!');
        return redirect("/town/$id/edit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Restaurant\Town  $town
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Town::destroy($id);
         Session::flash('mensaje', 'Descripcion eliminada!');
        return redirect("/town/$id/edit");
    }
    
    
    public function jsoncreate(){
        
       $states= \Restaurant\State::pluck('name', 'id');
        return view('towns.jsoncreate' , compact("states") );
    }
     public function jsonstore(Request $request){
        $lista= json_decode( $request->name);
        $state_id=  $request->state_id;
        
        foreach($lista as $ite){
            Town::create( ['name'=>  $ite->name   , 'state_id'=>$state_id]);
        }
        Session::flash('mensaje', 'Ciudades registradas!');
        return redirect("/city/jsoncreate");
    }
}
