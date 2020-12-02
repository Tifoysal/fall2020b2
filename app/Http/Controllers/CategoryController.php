<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showForm()
    {
        return view('layouts.category.create');
    }

    public function storeCategory(Request $request)
    {

        $request->validate([
            'category_name'=>'required',
        ]);

        Category::create([
            'name'=>$request->category_name,
            'description'=>$request->description
        ]);


        return redirect()->back()->with('msg','Category Created Successfully.');

    }

    public function showList()
    {

        //query builder

        //Eloquent ORM
        //all()
        //get()

        //find()
        //first()
        $categories=Category::paginate(10);

        return view('layouts.category.list',compact('categories'));
    }

    public function getAllProducts($id)
    {
        $category=Category::find($id);

        $products=Product::where('category_id','=',$id)->get();
        //select * from products where category_id=$id;

        return view('layouts.category.product_list',compact('products','category'));
    }
}
