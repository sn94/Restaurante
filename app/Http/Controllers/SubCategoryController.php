<?php

namespace Restaurant\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Restaurant\Category;
use Restaurant\SubCategory;


class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::pluck('name', 'id');
        $subcategories= [];
        if( $categories){ 
             $subcategories= SubCategory::where('category_id', "1" )->get();
        }
       
        return view('subcategories.index',   [ "subcategories"=> $subcategories, "categories"=> $categories] );
    }
    
    
    
    public function subcategories(  $id  ){
        
      return response()->json(  SubCategory::where( 'category_id',  $id  )->get()   );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::pluck('name', 'id');
        return view("subcategories.create", compact("categories") );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SubCategory::create(  $request->all() );
        Session::flash('mensaje', 'Subcategoria agregada! ');
        
         $categories= Category::pluck('name', 'id');
        return view('subcategories.create', compact('categories'));
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
        $categories= Category::pluck( 'name', 'id');
        $subcategory= SubCategory::find( $id);
        
        return view('subcategories.edit', ['subcategory'=> $subcategory, 'categories'=> $categories ] );
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
        $subcategory= SubCategory::find( $id);
        $subcategory->fill(  $request->all() );
        $subcategory->save();
        
       Session::flash('mensaje', 'Subcategoria agregada! ');
       return redirect( "/subcategory");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SubCategory::destroy( $id);
        Session::flash('mensaje', 'Subcategoria borrada! ');
        return redirect("/subcategory");
    }
}
