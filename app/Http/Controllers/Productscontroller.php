<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductTaskRequest;
use App\Http\Requests\ProductTaskUpdate;
use App\Models\product;
use Illuminate\Http\Request;

class Productscontroller extends Controller
{
    public function index()
    {
        $products=product::all();
        return response()->json($products,200);
    }
    public function show($id){
        $peoduct=product::findOrFail($id);
        return response()->json($peoduct,200);
    }
    public function store(ProductTaskRequest $request){

        $product=product::create($request->validated());

        return response()->json($product,201);
    }
    public function update(ProductTaskUpdate $request, $id){
        $product=product::findOrFail($id);

        $product->update($request->validated());
        return response()->json($product,200);  
}

    public function destroy($id){
        $product=product::findOrFail($id);
        $product->delete();
        return response()->json(["message" => "Product deleted successfully"],200);
    }
    public function amount($id, Request $request)
    {
        $product=product::findOrFail($id);
        if($product->quantity>=$request->amount){
        $product->quantity -= $request->amount;
        $product->save();
        return response()->json($product,200);
        }
        return response()->json(["message" => "Not enough quantity available"],400);
    }
}