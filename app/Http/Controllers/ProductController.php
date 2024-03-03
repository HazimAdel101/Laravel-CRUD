<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view("products/index", compact("products"));
    }

    public function create(){
        return view("products/create");
    }

    public function store(Request $request){
        $data = $request->validate([
            "name"=> "required",
            "quantity"=> "required|numeric",
            "price"=> "required|decimal:0,6",
            "description"=> "nullable",
        ]);

        $newProduct = Product::create($data);
        return redirect(route("product.index"));
    }
}
