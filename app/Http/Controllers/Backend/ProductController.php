<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showForm()
    {
        $categories=Category::all();

        return view('layouts.product.create',compact('categories'));
    }

    public function storeProduct(Request $request)
    {

      $request->validate([
            'product_name'=>'required',
            'product_price'=>'required|numeric',
            'category_id'=>'required',
        ]);

        Product::create([
            'name'=>$request->product_name,
            'price'=>$request->product_price,
            'description'=>$request->description,
            'category_id'=>$request->category_id,
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
        $products=Product::with('category')->paginate(10);

        return view('layouts.product.list',compact('products'));
    }

    public function deleteProduct($pid)
    {
      //delete product
//        Product::where('id',$pid)->delete();
        $product=Product::find($pid);
        $product->delete();

        return redirect()->back();

    }

    public function productView($pid)
    {
       $single_product=Product::find($pid);

        return view('layouts.product.view',compact('single_product'));
    }

    public function edit($id)
    {
        $product=Product::find($id);

//        dd($product);
        return view('layouts.product.edit',compact('product'));
    }

    public function update(Request $request,$id)
    {

        $request->validate([
            'product_name'=>'required',
            'product_price'=>'required|numeric',
        ]);

        $product=Product::find($id);

        $product->update([
            'name'=>$request->product_name,
            'price'=>$request->product_price,
            'description'=>$request->description,
            'status'=>$request->status,
        ]);

        return redirect()->back()->with('msg','Product updated Successfully.');
    }
}
