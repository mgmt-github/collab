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

        // Calculate the subtotal
        $subtotal = array_reduce($cart, function ($total, $item) {
            return $total + ($item['price'] * $item['quantity']);
        }, 0);

        return view('profile.cart', compact('cart', 'subtotal'));
    }

    // Add item to cart
    public function add(Request $request)
    {
        $id = $request->input('id');
        $image = $request->input('image');
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
                'image' => $image
            ];
        }

        Session::put('cart', $cart); // Save cart to session

        return redirect()->route('user.cart')->with('success', 'Item added to cart!');
    }

    public function updateCart(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        // Validate input
        $validated = $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        if (isset($cart[$id])) {
            // Update the quantity
            $cart[$id]['quantity'] = $validated['quantity'];
            session()->put('cart', $cart);

            // Calculate the new subtotal
            $subtotal = array_sum(array_map(function ($item) {
                return $item['price'] * $item['quantity'];
            }, $cart));

            return response()->json([
                'status' => 'success',
                'message' => __('admin.Cart updated successfully!'),
                'subtotal' => $subtotal,
                'item_total' => $cart[$id]['price'] * $cart[$id]['quantity'],
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => __('admin.Item not found in cart.'),
        ], 404);
    }

    // Remove item from cart
    public function remove(Request $request)
    {
        $id = $request->input('id');

        $cart = Session::get('cart', []);
        unset($cart[$id]);

        Session::put('cart', $cart); // Save updated cart to session

        return redirect()->route('user.cart')->with('success', 'Item removed from cart!');
    }

    public function placeOrder(Request $request)
    {
        $validated = $request->validate([
            'payment_method' => 'required',
            // Add other validation rules as needed
        ]);

        // Logic to save the order
        $order = new Order();
        $order->user_id = auth()->id();
        $order->total = $request->input('total');
        $order->payment_method = $request->input('payment_method');
        $order->save();

        // Attach cart items to the order
        foreach (session('cart', []) as $item) {
            $order->items()->create([
                'product_id' => $item['id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        // Clear the cart
        session()->forget('cart');

        return redirect()->route('thank.you')->with('success', 'Order placed successfully!');
    }
}
