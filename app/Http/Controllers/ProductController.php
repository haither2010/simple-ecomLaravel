<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    function index()
    {
        $productsLimit = DB::table('products')->paginate(4);
        $products = Product::all();
        return view('product', ['products' => $products, 'productsLimit' => $productsLimit]);
    }

    function details($id)
    {
        $product = Product::find($id);
        return view('details', ['product' => $product]);
    }

    function search(Request $req)
    {
        $userInput = $req->searchInp;
        $searchProduct = Product::where('name', 'like', '%' . $userInput . '%')
                        ->get();
        // return $searchProduct;
        return view('search', ['serachResults' => $searchProduct]);
    }
}
