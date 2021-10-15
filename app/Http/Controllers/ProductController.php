<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
// use App\Http\Controllers\Session;
use Session;
use App\Models\Cart;

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

    function addtocart(Request $req)
    {  
        if($req->session()->has('user'))
        {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->productId;
            $cart->save();
            return redirect('/');
        }else 
        {
            return redirect('/login');
        }
    }

    static function cartCount()
    {
        // $userId = $request->session()->get('user')['id'];
        $userId = session('user')['id'];
        $count = Cart::where('user_id', $userId)->count();
        return $count;
    }

    public function cartdetails()
    {
        $userId = session('user')['id'];
        $products = DB::table('carts')
                    ->join('products', 'carts.product_id', '=', 'products.id')
                    ->where('carts.user_id', $userId)
                    ->select(['products.*', 'carts.id as cart_id'])
                    ->get();
                
        return view('cartdetails', ['products' => $products]);

        // return $products;
    }

    public function removeCart($id)
    {
        DB::table('carts')->where('id', '=', $id)->delete();
        return redirect('/cartdetails');
        // return $cartId;
    }

    public function ordernow()
    {
        $userId = session('user')['id'];
        $total = DB::table('carts')
                    ->join('products', 'carts.product_id', '=', 'products.id')
                    ->where('carts.user_id', $userId)
                    ->select(['products.*', 'carts.id as cart_id'])
                    ->sum('products.price');
                
        return view('ordernow', ['total' => $total]);
    }
}

//37:09