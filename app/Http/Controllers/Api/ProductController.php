<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduct()
    {
        $products=Product::all();

        return response()->json([
            'success'=>true,
            'message'=>'all products',
            'data'=>$products
        ]);
    }

    public function productCreate(Request $request)
    {

       $new=Product::create([
           'name'=>$request->name,
            'category_id'=>$request->category_id,
            'price'=>$request->price
        ]);

        return response()->json([
            'success'=>true,
            'message'=>'Product Created',
            'data'=>$new
        ]);


    }
}
