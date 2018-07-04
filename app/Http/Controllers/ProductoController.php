<?php

namespace Restaurant\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Session;
use Restaurant\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos=  Producto::where('category_id','1')->get();
        $categories= \Restaurant\Category::pluck('name', 'id');
        return view('productos.index', [ 'productos'=> $productos, 'categories'=> $categories ] );
    }

    
    
    public function lista( $catid){
        return response()->json( Producto::where('category_id',$catid)->get()  );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= \Restaurant\Category::pluck('name', 'id');
        return view('productos.create', compact('categories')  );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
          Producto::create( $request->all() );
          Session::flash( 'mensaje','Producto agregado!');
          $categories= \Restaurant\Category::pluck( 'name', 'id');
          return view( 'productos.create',  compact( 'categories') );
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
        $producto= Producto::find( $id) ;
        $categories= \Restaurant\Category::pluck('name', 'id' );
        return view('productos.edit' ,  [ 'producto'=> $producto , 'categories'=> $categories]);
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
        $producto= Producto::find( $id) ;
        $producto->fill(  $request->all() );
        $producto->save();
         Session::flash( 'mensaje','Producto actualizado!');
        return redirect('/producto');
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
