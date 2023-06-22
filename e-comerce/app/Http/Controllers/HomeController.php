<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Products;
use App\Models\Cart;


class HomeController extends Controller
{
    public function index()
    {
        $product=Products::all();
        return View ('home.userpage', compact('product'));
    }
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.home');
        } else {
            $products = Products::all();
            return view('home.userpage', compact('products'));
        }
    }
    public function view_order($id)
    {
        $product = Products::find($id);

        return view('home.view_order', compact('product'));

    }
    public function add_cart(Request $request, $id)
{
    if (Auth::id()) {
        $user = Auth::user();
        $product = Products::find($id);

        $existingCart = Cart::where('product_id', $product->id)
            ->where('id', $user->id)
            ->first();

        if ($existingCart) {
            // Increase the quantity if the product already exists in the cart
            $existingCart->quantity += 1;
            $existingCart->save();
        } else {
            // Add a new entry to the cart if the product doesn't exist
            $cart = new Cart;
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->product_title = $product->title;
            $cart->price = $product->price;
            $cart->image = $product->image;
            $cart->product_id = $product->id;
            $cart->quantity = 1; // Set the initial quantity to 1 for a new product
            $cart->save();
        }

        return redirect()->back()->with('message', 'Product Added to Cart Successfully');
    } else {
        return redirect('login');
    }
}



    public function store()
    {
         $product = Products::all();
        return view('home.store', compact('product'));
    }
    public function get_started()
    {
         $product = Products::all();
        return view('home.get_started', compact('product'));
    }
    public function custom()
    {
         $product = Products::all();
        return view('home.customs', compact('product'));
    }
    public function merch()
    {
         $product = Products::all();
        return view('home.merch', compact('product'));
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function comingsoon()
    {
        return view('home.comingsoon');
    }
    public function shopping_cart()
    {
        return view('home.shopping_cart');
    }


}

