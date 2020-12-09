<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getProducts($id)
    {
        $products=Product::where('category_id',$id)->get();

        return view('frontend.layouts.product_under_category',compact('products'));
    }
}
