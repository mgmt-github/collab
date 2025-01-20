<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    // Display cart
    public function index()
    {
        $cart = Session::get('cart', []);
        return view('profile.cart', compact('cart'));
    }

    // Add item to cart
    public function add(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $price = $request->input('price');
        $quantity = $request->input('quantity', 1);

        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity; // Update quantity if exists
        } else {
            $cart[$id] = [
                'name' => $name,
                'price' => $price,
                'quantity' => $quantity,
            ];
        }

        Session::put('cart', $cart); // Save cart to session

        return redirect()->route('cart.index')->with('success', 'Item added to cart!');
    }

    // Remove item from cart
    public function remove(Request $request)
    {
        $id = $request->input('id');

        $cart = Session::get('cart', []);
        unset($cart[$id]);

        Session::put('cart', $cart); // Save updated cart to session

        return redirect()->route('cart.index')->with('success', 'Item removed from cart!');
    }
}
