<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Description;

class ProductDescriptionController extends Controller
{
    /**
    * Display a listing of the resource.
    * 
    * @return Response
    */
    public function index($productId){
        return Description::ofProduct($productId)->paginate();
    }
    
    /**
    * Store a newly created resource in storage.
    * 
    * @param Request $request
    * @return Response
    */
    public function store($productId, Request $request){
        $product = Product::findOrFail($productId);
        $product->descriptions()->save(new Description(['body'=> $request->input('body')]));
        return $product->descriptions;
    }
}
