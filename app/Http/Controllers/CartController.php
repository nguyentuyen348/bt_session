<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    public function detail()
    {
        $cart = session()->get('cart');

        return view('page/cart',compact('cart'));
    }

    public function addToCart($id)
    {
        $carts = session()->get('cart');

        $product = Product::findOrFail($id);
        if (!$carts) {
            $carts = [
                $id => [
                    'name' => $product->name,
                    'size' => $product->size,
                    'brand' => $product->brand,
                    'price' => $product->price,
                    'quantity' => 1,
                    'img' => $product->img
                ]
            ];
        }
        if(isset($carts[$id])){
            $carts[$id]['quantity']+=1;
            session()->put('cart', $carts);
            return redirect()->back();
        }
        $carts[$id] = [
            'name' => $product->name,
            'size' => $product->size,
            'brand' => $product->brand,
            'price' => $product->price,
            'quantity' => 1,
            'img' => $product->img
        ];

        session()->put('cart', $carts);
        return redirect()->back();

    }

    public function deleteById($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->action([CartController::class,'detail'])
            ->with('success','delete success!');
    }
}
