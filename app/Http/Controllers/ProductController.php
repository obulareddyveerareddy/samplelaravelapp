<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
    * Display a listing of the resource.
    * 
    * @return Response
    */
    public function index(){
        return Product::paginate();
    }
    
    /**
    * Store a newly created resource in storage.
    * 
    * @param Request $request
    * @return Response
    */
    public function store(Request $request){
        return Product::create([
            'name'=> $request->input('name')
        ]);
    }
    
    /**
    * Update the specified resource in storage.
    * 
    * @param Request $request
    * @param int $id
    * @return Response
    */
    public function update(Request $request, $id){
        $product = Product::findOrFail($id);
        $product->update([
            'name'=>$request->input('name')
        ]);
    }
}
