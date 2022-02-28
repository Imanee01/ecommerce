<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admins.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([    
            'name'=>'required|min:3',
            'description'=>'required|min:10',
            'price'=>'required|numeric|min:99|max:1000',
            'image'=> 'required|max:1024', 
            'promotion'=>'required|numeric|min:10|max:80',
            
        ]);
        Product::create([
            'name'=> request('name'),
            'description'=>request('description'),
            'price'=>request('price'),
            'image'=>'/storage/'.request('image')->store('images','public'),
            'promotion'=>request('promotion'),
        ]);

        return redirect('/admin/produits')->with('status','Le produit  a été créé.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admins.show',[
            'products'=>Product::all(),

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admins.edit',[
            'product'=>$product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        request()->validate([
            'name'=>'required|min:3',
            'description'=>'required|min:10',
            'price'=>'required|numeric|min:99|max:1000',
            'image'=> 'required|max:1024', 
            'promotion'=>'required|numeric|min:10|max:80',
        ]);
        
        $product->update([
            'name'=> request('name'),
            'description'=>request('description'),
            'price'=>request('price'),
            'image'=>'/storage/'.request('image')->store('images','public'),
            'promotion'=>request('promotion'),
        ]);
        return redirect('/admin/produits')->with('status','La produit '.$product->name.' a été Modifier.'); 
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/admin/produits')->with('status','La catégorie '.$product->name.' a été supprimée.');
    }
}
