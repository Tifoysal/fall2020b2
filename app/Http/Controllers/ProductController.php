<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showForm()
    {
        return view('layouts.product.create');
    }

    public function storeProduct(Request $request)
    {

      $request->validate([
            'product_name'=>'required',
            'product_price'=>'required|numeric',
        ]);

        Product::create([
            'name'=>$request->product_name,
            'price'=>$request->product_price
        ]);


        return redirect()->back()->with('msg','Product Created Successfully.');

    }

    public function showList()
    {
        //query builder

        //Eloquent ORM
        //all()
        //get()

        //find()
        //first()
        $products=Product::all();


        return view('layouts.product.list',compact('products'));
    }
}
